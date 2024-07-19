<?php

namespace App\Traits;


use Intervention\Image\Facades\Image as Image;

trait uploadTrait
{



    public function uploadAuthorisationLetter($request)
    {
        if ($request->has('authorisation_letter')) {

            $authorisation_letter = $request->file('authorisation_letter');
            $fileInfo = $authorisation_letter->getClientOriginalName();
            $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $file_name = $filename . '-' . time() . '.' . $extension;
            $authorisation_letter->move(public_path('uploads'), $file_name);

            return 'uploads/' . $file_name;
        }
    }

    public function uploadDocuments($request)
    {
        if ($request->has('document')) {

            $uploadDocument = $request->file('document');
            $fileInfo = $uploadDocument->getClientOriginalName();
            $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $file_name = $filename . '-' . time() . '.' . $extension;
            $uploadDocument->move(public_path('uploads'), $file_name);

            return 'uploads/' . $file_name;
        }
    }

    public function uploadIcon($request)
    {
        if ($request->has('icon') && !empty($request->icon)) {
            $uploadDocument = $request->file('icon');
            $fileInfo = $uploadDocument->getClientOriginalName();
            $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $file_name = $filename . '-' . time() . '.' . $extension;
            $uploadDocument->move(public_path('uploads/icons'), $file_name);

            return 'uploads/icons/' . $file_name;
        }

        return null;
    }

     public function uploadBanner($request)
    {
        if ($request->has('banner') && !empty($request->banner)) {
            $uploadDocument = $request->file('banner');
            $fileInfo = $uploadDocument->getClientOriginalName();
            $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $file_name = time() . '.' . $extension;
            $uploadDocument->move(public_path('uploads/banners'), $file_name);

            return 'uploads/banners/' . $file_name;
        }

        return null;
    }
    public function uploadPassportFile($request)
    {

        if ($request->has('passport_file')) {

            $uploadDocument = $request->file('passport_file');
            $fileInfo = $uploadDocument->getClientOriginalName();
            $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $file_name = $filename . '-' . time() . '.' . $extension;
            $uploadDocument->move(public_path('uploads'), $file_name);

            return 'uploads/' . $file_name;
        }
    }

    public function uploadAttachmentFile($request)
    {

        if ($request->has('attachment')) {

            $uploadDocument = $request->file('attachment');
            $fileInfo = $uploadDocument->getClientOriginalName();
            $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $file_name = $filename . '-' . time() . '.' . $extension;
            $uploadDocument->move(public_path('uploads/attachments'), $file_name);

            return 'uploads/attachments/' . $file_name;
        }
    }


    //     public function uploadGuestDocument($request)
    // {
    //     if($request->hasFile('file')){


    //         $filenameWithExt = $request->file('file')->getClientOriginalName();

    //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

    //         $extension = $request->file('file')->getClientOriginalExtension();

    //         $fileNameToStore = $filename.'-'.time().'.'.$extension;

    //         $path = $request->file('file')->storeAs('public/uploads', $fileNameToStore);

    //      } else {
    //         $fileNameToStore = 'noimage.jpg';
    //      }
    //        }

    public function uploadCustomerDocument($request)
    {
        if ($request->has('identity_document')) {
            $file = $request->file('identity_document');

            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('docs/' . $fileName));
            $file_path = '/docs/' . $fileName;
            return $file_path;
        }
    }

    public function uploadPicture($request)
    {
        if ($request->has('profile_picture')) {
            $uploadDocument = $request->file('profile_picture');
            $fileInfo = $uploadDocument->getClientOriginalName();
            $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $file_name = $filename . '-' . time() . '.' . $extension;
            $uploadDocument->move(public_path('uploads'), $file_name);

            return 'uploads/' . $file_name;
        }
    }

    public function uploadDocs($request)
    {
        if ($request->has('identity_document')) {
            $file = $request->file('identity_document');

            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('docs/' . $fileName));
            $file_path = '/docs/' . $fileName;
            return $file_path;
        }
    }
    public function uploadBill($request)
    {

        if ($request->has('file')) {

            $uploadDocument = $request->file('file');
            $fileInfo = $uploadDocument->getClientOriginalName();
            $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $file_name = $filename . '-' . time() . '.' . $extension;
            $uploadDocument->move(public_path('bills'), $file_name);

            return 'bills/' . $file_name;
        }
    }
    public function uploadPayment($request)
    {

        if ($request->has('file')) {

            $uploadDocument = $request->file('file');
            $fileInfo = $uploadDocument->getClientOriginalName();
            $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $file_name = $filename . '-' . time() . '.' . $extension;
            $uploadDocument->move(public_path('payments'), $file_name);

            return 'payments/' . $file_name;
        }
    }

    public function uploadChecListImage($file)
    {

        $uploadDocument = $file;
        $fileInfo = $uploadDocument->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name = $filename . '-' . time() . '.' . $extension;
        $uploadDocument->move(public_path('check_list'), $file_name);

        return 'check_list/' . $file_name;
    }
    public function uploadAttachment($request)
    {
        if ($request->has('attachment')) {

            $uploadDocument = $request->file('attachment');
            $fileInfo = $uploadDocument->getClientOriginalName();
            $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $file_name = $filename . '-' . time() . '.' . $extension;
            $uploadDocument->move(public_path('attachment'), $file_name);

            return 'attachment/' . $file_name;
        }
    }
}
