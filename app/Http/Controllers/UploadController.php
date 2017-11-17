<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Issue;
use App\IssueScreenshot;

class UploadController extends Controller
{
    public function uploadForm()
    {

        return view('upload_form');
    }


    public function uploadSubmit(UploadRequest $request)
    {
        $issue = Issue::create($request->all());

        foreach ($request->screenshots as $screenshot) {
            $filename = $screenshot->store('screenshots');

            IssueScreenshot::create([
                'issue_id' => $issue->id,
                'filename' => $filename
            ]);
        }
        return view('success');
    }
}
