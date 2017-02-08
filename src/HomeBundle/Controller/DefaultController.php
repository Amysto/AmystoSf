<?php

namespace HomeBundle\Controller;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use HomeBundle\Entity\Frontiere;
use HomeBundle\Entity\CustomDate;
use Symfony\Component\HttpFoundation\JsonResponse;


class DefaultController extends Controller
{
	public function indexAction(Request $request)
	{

		return $this->render('HomeBundle:Default:index.html.twig',array());
	}

	public function mapAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$return;
		if($request->isMethod('POST')){
			$action = $request->get('action');
			switch ($action) {
				case 'saveBorder':
				$border = $request->get('border');
				$this->saveBorder($em, $border);

				break;
				case 'getFrontiere':
       				// $date = $request->get('customDate');
				$date =2016;
				return $this->getFrontiere($em, $date);
				break;
				default:

				break;
			}
			// return new jsonResponse(array("success" => "true"));
		}



		return $this->render('HomeBundle:Default:map.html.twig', array());

	}

	public function saveBorder($em, $border){

		$customDate = $em->getRepository("HomeBundle:CustomDate")->findOneBy(array('year' => 2016 ));
		if (!$customDate) {
			$customDate = new CustomDate();
			$customDate->setYear(2016);
			$customDate->setMonth(02);
			$customDate->setDay(8);
			$em->persist($customDate);

		}
		
		foreach ($border as $key => $value) {
			$frontiere = new Frontiere();
			$frontiere->setCoordonnees($value[0].":".$value[1]);
			$frontiere->setDate($customDate);
			$em->persist($frontiere);
		}
		$em->flush();
	}

	public function getFrontiere($em,$date){
		$customDate = $em->getRepository("HomeBundle:CustomDate")->findOneBy(array('year' => $date ));
		$frontieres = $em->getRepository("HomeBundle:Frontiere")->findBy(array('date' => $customDate));
		$coordtab;
		foreach ($frontieres as $frontiere) {
			$coord = $frontiere->getCoordonnees();
			
			$coordtab[] = explode(":", $coord);
		}
		return new jsonResponse($coordtab); 
	}

}