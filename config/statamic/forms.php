<?php
use App\Http\Controllers\CustomFormHandler;
return [

    /*
    |--------------------------------------------------------------------------
    | Forms Path
    |--------------------------------------------------------------------------
    |
    | Where your form YAML files are stored.
    |
    */

    'forms' => resource_path('forms'),

    /*
    |--------------------------------------------------------------------------
    | Email View Folder
    |--------------------------------------------------------------------------
    |
    | The folder under resources/views where your email templates are found.
    |
    */

    'email_view_folder' => null,

    /*
    |--------------------------------------------------------------------------
    | Send Email Job
    |--------------------------------------------------------------------------
    |
    | The class name of the job that will be used to send an email.
    |
    */

    'send_email_job' => \Statamic\Forms\SendEmail::class,

    /*
    |--------------------------------------------------------------------------
    | Exporters
    |--------------------------------------------------------------------------
    |
    | Here you may define all the available form submission exporters.
    | You may customize the options within each exporter's array.
    |
    */

    'exporters' => [
        'csv' => [
            'class' => Statamic\Forms\Exporters\CsvExporter::class,
        ],
        'json' => [
            'class' => Statamic\Forms\Exporters\JsonExporter::class,
        ],
    ],

      /*
    |--------------------------------------------------------------------------
    | Multi-Step Forms
    |--------------------------------------------------------------------------
    |
    | Configuration for multi-step forms.
    |
    */

    // 'multi_step_forms' => [
    //     'contact_step1' => [
    //         'store' => false,  // Do not store intermediate steps
    //         'hooks' => [
    //             'submission.create' => function ($submission) {
    //                 session()->put('contact_step1', $submission->data());
    //             },
    //         ],
    //     ],
    //     'contact_step2' => [
    //         'store' => false,  // Do not store intermediate steps
    //         'hooks' => [
    //             'submission.create' => function ($submission) {
    //                 session()->put('contact_step2', $submission->data());
    //             },
    //         ],
    //     ],
    //     'contact' => [
    //         'store' => true,
    //         'hooks' => [
    //             'submission.create' => function ($submission) {
    //                 $step1 = session()->get('contact_step1', []);
    //                 $step2 = session()->get('contact_step2', []);
    //                 $final_data = array_merge($step1, $step2, $submission->data());

    //                 $submission->data($final_data);

    //                 // Optionally clear the session data
    //                 session()->forget(['contact_step1', 'contact_step2']);
    //             },
    //         ],
    //         'email' => [
    //             'to' => 'admin@example.com',
    //             'from' => 'noreply@example.com',
    //             'subject' => 'New Contact Form Submission',
    //         ],
    //     ],
    // ],

    
    // 'multi_step_forms' => [
    //     'contact' => [
    //         'store' => true,
    //         'hooks' => [
    //             'submission.create' => function ($submission) {
    //                 // $final_data = $submission->data();
    //                 // $submission->data($final_data);

    //                 // ------------------- by controooler or send into mail  ----------------
    //                 $handler = new App\Http\Controllers\CustomFormHandler\CustomFormHandler();
    //                 return $handler->handle($submission);
    //             },
    //         ],
    //         // 'email' => [
    //         //     'to' => 'admin@example.com',
    //         //     'from' => 'noreply@example.com',
    //         //     'subject' => 'New Contact Form Submission',
    //         // ],
    //     ],
    // ],
//    'hooks' => [
//         'submission.create:contact' => function ($submission) {
//             $handler = new App\Http\Controllers\CustomFormHandler\CustomFormHandler();
//             return $handler->handle($submission);
//         },
//     ],


];
