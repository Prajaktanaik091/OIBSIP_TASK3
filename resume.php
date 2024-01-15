<!-- c:\Users\praja\Downloads\PRAJAKTARESUME.pdf -->

<?php
$resumeFilePath = 'path/to/your/resume.pdf'; // Change this to the actual path to your resume file

if (file_exists($resumeFilePath)) {
    // Set the appropriate headers for PDF file download
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="Your_Resume.pdf"');
    header('Content-Length: ' . filesize($resumeFilePath));

    // Read the file and output it to the browser
    readfile($resumeFilePath);
    exit;
} else {
    // If the file doesn't exist, display an error message
    echo 'Resume file not found.';
}
?>
