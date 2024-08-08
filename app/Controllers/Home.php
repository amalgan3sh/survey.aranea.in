<?php

namespace App\Controllers;
use App\Models\SurveyResponseModel;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function submitSurvey()
    {
        $surveyResponseModel = new SurveyResponseModel();

        // Validate the request data
        

        // Collect the request data
        $data = $this->request->getPost();
        
        try {
            // Insert the data into the database
            if ($surveyResponseModel->insert($data)) {
                return $this->response->setJSON([
                    'status' => ResponseInterface::HTTP_OK,
                    'message' => 'Survey response saved successfully'
                ]);
            } else {
                return $this->response->setJSON([
                    'status' => ResponseInterface::HTTP_INTERNAL_SERVER_ERROR,
                    'message' => 'Failed to save survey response'
                ]);
            }
        } catch (\Exception $e) {
            // Log the error message
            log_message('error', $e->getMessage());
            return $this->response->setJSON([
                'status' => ResponseInterface::HTTP_INTERNAL_SERVER_ERROR,
                'message' => 'An unexpected error occurred'
            ]);
        }
    }
}
