<?php

namespace App\Jobs\Promotion;

use App\Coureregistration;
use App\Defer;
use App\Dismssal;
use App\Rasticate;
use App\Regacademicyear;
use App\Studentinfo;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Studentpromotion implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $forms = ['Level 400','Level 300', 'Level 200', 'Level 100'];

        $count = count($forms);

        foreach ($forms as $value) {
            

         // $student = Studentinfo::
         //    with(["rasticate" => function($q){
         //      $q->where('status','1');
         //    }])
         //    ->with(["defer" => function($q){
         //      $q->where('status','1');
         //    }])
         //    ->with(["dismssal" => function($q){
         //      $q->where('status','1');
         //    }])
         //    ->where('currentlevel', $value)->get();

         $student = Studentinfo::where('currentlevel', $value)->get();


        if (!$student->isEmpty()) {

            foreach ($student as $row) {
                $indexnumber = $row->indexnumber;
                $id = $row->id;
                $userid = $row->user_id;
                $duration = $row->duration;

                $ras = Rasticate::where('user_id',$userid)->where('status','1')->get();

                $defer = Defer::where('user_id',$userid)->where('status','1')->get();

                $dis = Dismssal::where('user_id',$userid)->where('status','1')->get();


                if ($value == 'Level 400') {
                    if (!$ras->isEmpty()) {
                        continue;
                    }

                    if (!$defer->isEmpty()) {
                        continue;
                    }

                    if (!$dis->isEmpty()) {
                        continue;
                    }

                    $creg = Regacademicyear::
                     where('user_id', $userid)->get();

                     if (!$creg->isEmpty()) {

                        $cntcreg = count($creg);

                        if ($duration == '4') {
                            if ($cntcreg != '8') {
                                continue;
                            }
                            
                        }

                        if ($duration == '3') {
                            if ($cntcreg != '6') {
                                continue;
                            }
                            
                        }

                        if ($duration == '2') {
                            if ($cntcreg != '4') {
                                continue;
                            }
                            
                        }
                        
                     }
                }
                //End of level 400


                if ($value == 'Level 300') {
                    if (!$ras->isEmpty()) {
                        continue;
                    }

                    if (!$defer->isEmpty()) {
                        continue;
                    }

                    if (!$dis->isEmpty()) {
                        continue;
                    }

                    $creg = Regacademicyear::
                     where('user_id', $userid)->get();

                    $data = ['currentlevel' => 'Level 400'];

                     if (!$creg->isEmpty()) {

                        $cntcreg = count($creg);

                        if ($duration == '4') {
                            if ($cntcreg == '6') {
                               Studentinfo::findorfail($id)->update($data); 
                            }else{
                                continue;
                            }
                            
                        }


                     }
                }
                //End of level 300



                if ($value == 'Level 200') {
                    if (!$ras->isEmpty()) {
                        continue;
                    }

                    if (!$defer->isEmpty()) {
                        continue;
                    }

                    if (!$dis->isEmpty()) {
                        continue;
                    }

                    $creg = Regacademicyear::
                     where('user_id', $userid)->get();

                    $data = ['currentlevel' => 'Level 300'];

                     if (!$creg->isEmpty()) {

                        $cntcreg = count($creg);

                        if ($duration == '4') {
                            if ($cntcreg == '4') {
                               Studentinfo::findorfail($id)->update($data); 
                            }else{
                                continue;
                            }
                            
                        }


                        if ($duration == '3') {
                            if ($cntcreg == '4') {
                               Studentinfo::findorfail($id)->update($data); 
                            }else{
                                continue;
                            }
                            
                        }

                     }
                }
                //End of level 200


                if ($value == 'Level 100') {

                    if (!$ras->isEmpty()) {
                        continue;
                    }

                    if (!$defer->isEmpty()) {
                        continue;
                    }

                    if (!$dis->isEmpty()) {
                        continue;
                    }

                    $creg = Regacademicyear::
                     where('user_id', $userid)->get();

                    $data = ['currentlevel' => 'Level 200'];

                     if (!$creg->isEmpty()) {

                        $cntcreg = count($creg);

                        if ($duration == '4') {

                            if ($cntcreg == '2') {
                               Studentinfo::findorfail($id)->update($data); 
                            }else{
                                continue;
                            }
                            
                        }


                        if ($duration == '3') {
                            if ($cntcreg == '2') {
                               Studentinfo::findorfail($id)->update($data); 
                            }else{
                                continue;
                            }
                            
                        }

                        if ($duration == '2') {
                            if ($cntcreg == '2') {
                               Studentinfo::findorfail($id)->update($data); 
                            }else{
                                continue;
                            }
                            
                        }

                     }
                }
                //End of level 100

            }

            //end student loop here
            
        }

        }
    }
}
