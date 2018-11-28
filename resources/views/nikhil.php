public function store(Request $request)
    {
        $this->validate($request, [
            'deptShortName'=>'required',
            'batchNo'=>'required',
            'startID'=>'required',
            'endID'=>'required',
            'studentPassword'=>'required|min:6'
        ]);

        // dd($request);

        for($i = $request->startID; $i <= $request->endID; $i++){
            $data  = new AllBatch();
            $data->deptShortName = $request->deptShortName;
            $data->batchNo = $request->batchNo;
            if($request->batchSection){
                $data->batchSection = $request->batchSection;
            }
            $std_pass = $this->generateRandomString($request->studentPassword);
            $data->studentID = $i;
            $data->studentPassword = $std_pass;
            $data->save();

            //Sends ID Password to User Table
            $dataUser  = new User();
            $dataUser->studentID = $i;
            $dataUser->studentDept = $request->deptShortName;
            $dataUser->studentBatch = $request->batchNo;
            if($request->batchSection){
            $dataUser->studentSection = $request->batchSection;
            }
            $dataUser->password = bcrypt($std_pass);
            $dataUser->save();
        }
        Session::flash('success', 'New Batch Added');
        
        return redirect()->route('allbatches');
    }