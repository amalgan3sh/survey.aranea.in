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
        $validation = \Config\Services::validation();
    
        // Define validation rules
        $validationRules = [
            'first_name' => 'required|min_length[3]',
            'last_name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'home_town' => 'required',
            // Add other rules as needed
        ];
    
        // Validate data
        if (!$validation->setRules($validationRules)->run($this->request->getPost())) {
            // If validation fails, you might want to redirect back with errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
    
        // Collect and prepare data for insertion
        $data = $this->request->getPost();
        $insertData = [
            'name' => $data['first_name'] . ' ' . $data['last_name'],
            'email' => $data['email'],
            'home_town' => $data['home_town'],
            // Map other fields as needed
        ];
    
        try {
            // Insert the data into the database
            if ($surveyResponseModel->insert($insertData)) {
                // Redirect to the index.php view with a success message
                return redirect()->to('/index.php')->with('success', 'Survey response saved successfully');
            } else {
                // Redirect to index.php with an error message if insertion fails
                return redirect()->to('/index.php')->with('error', 'Failed to save survey response');
            }
        } catch (\Exception $e) {
            // Log the error message
            log_message('error', $e->getMessage());
            // Redirect to index.php with an unexpected error message
            return redirect()->to('/index.php')->with('error', 'An unexpected error occurred');
        }
    }
    
}
