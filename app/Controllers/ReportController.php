<?php

namespace Geoservices\Controllers;

use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

class ReportController extends Controller
{
    public function getReport(Request $request, Response $response, $args)
    {

        /* // checks to ensure we have valid inputs
        $validator = $this->container->validator->validate($request, [
            'email_list' => Validator::arrayType(),
            'expires_at' => Validator::date()->notBlank(),
            'name' => Validator::alnum("'-_")->notBlank(),
            'discount' => Validator::intVal()->noWhitespace()->notBlank(),
		]);
		
        if ($validator->isValid()) {
			sdfsdf
		} else {
			return $response->withStatus(400)->withJson([
				'status'  => VoucherResponseConstants::VALIDATION_ERROR,
				'message'  => $validator->getErrors()
			]);
		}
		*/
		return $response->withStatus(200)->withJson([
			'status'    => true,
			'args' => $args
		]);
    }
}
