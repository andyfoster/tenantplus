<?php

//use Application\Model\Response;

class Tenants_Controller extends Base_Controller {

	public $restful = true;    

    public function get_index()
    {
    	return View::make('tenants.index');
    }

    public function get_documents()
    {
    	return View::make('tenants.documents')
            ->with('documents', Document::all());
    }

    public function get_view_document($id)
    {
    	return View::make('tenants.documents.create')
            ->with('document', Document::find($id));
    }

    public function post_create_document()
    {
        $document_id = Input::get('document_id');
        $user_id = Auth::user()->id;


        // we want to get all the input data
        // 
        // take apart the name and value pairs
        // 

        $inputs = Input::all();    
        //dd($inputs);
        foreach(Input::all() as $name => $value) {
            if (($name != '0') || ($name != 'csrf_token')) {

                // for some reason, laravel id=gnores form fields with nums as
                // the name value so this will fix it
                //  along with the <input name="id45"..
                $name = str_replace('id', '', $name);

                Answer::create(array(
                    'document_id' => $document_id,
                    'user_id' => $user_id,
                    'field_id' => $name,
                    'answer' => $value
                ));

            }


            // dd(array(
            //     'document_id' => $document_id,
            //     'user_id' => $user_id,
            //     'field_id' => $key,
            //     'answer' => $value
            // ));

        }
        return Redirect::to_route('tenant_view_document', $document_id);


    }
}