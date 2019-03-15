<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalUnitController extends Controller
{
    const NECESSARYGRADUATE = 167;       // 卒業までに必要な単位数
    const NECESSARYGRADUATE_COMMON = 75; // 卒業までに必要な一般科目の単位数
    const NECESSARYGRADUATE_EXPERT = 82; // 卒業までに必要な一般科目の単位数

    const COMMON_MEDS = 71;       // M, E, D, S科の一般科目の必修科目数
    const COMMON_C = 73;          // C科の一般科目の必修科目数
    const SELECT_COMMON = 5;      // 4年生までにとる選択科目5単位（ドイツ語演習Ⅱは除く）
    const TOTAL_COMMON_MEDS = 76; // = COMMON_MEDS + SELECT_COMMON
    const TOTAL_COMMON_C = 78;    // = COMMON_C + SELECT_COMMON
    const EXPERT_M = 72;          // M科の必修科目数
    const EXPERT_E = 77;          // E科の必修科目数
    const EXPERT_D = 82;          // D科の必修科目数
    const EXPERT_S = 76;          // S科の必修科目数
    const EXPERT_C = 79;          // C科の必修科目数



    public function index(){
        return view('cal_unit.index');
    }

    public function result(Request $request){
        if($request->department == "N"){
            return view('cal_unit.index', ["error_msg" => "学科が選択されていません"]);
        }
        $department  = $this->calDepartmentNecessaryUnit($request->department);
        $outsideunit = (int)$request->outsideunit;
        $toeicunit   = $this->calToeictoUnit($request->toeicscore);
        $commonunit  = $this->calCommonUnit($request->department);
        $dropunit    = (int)$request->dropunit;
        // var_dump(self::NECESSARYGRADUATE);
        // var_dump($department);
        // var_dump($outsideunit);
        // var_dump($toeicunit);
        // var_dump($commonunit);
        // var_dump($dropunit);
        // exit();
        $result = (self::NECESSARYGRADUATE + $dropunit) - ($department + $outsideunit + $toeicunit + $commonunit);
        return view('cal_unit.result', ["result" => $result]);
    }

    private function calDepartmentNecessaryUnit($department){
        $expermap = array(
            "M" => self::EXPERT_M,
            "E" => self::EXPERT_E,
            "D" => self::EXPERT_D,
            "S" => self::EXPERT_S,
            "C" => self::EXPERT_C,
            "N" => 0
        );
        return $expermap[$department];
    }

    private function calToeictoUnit($toeicscore){
        if($toeicscore >= 860){
            $unit = 7;
        }else if($toeicscore >= 795){
            $unit = 6;
        }else if($toeicscore >= 730){
            $unit = 5;
        }else if($toeicscore >= 665){
            $unit = 4;
        }else if($toeicscore >= 600){
            $unit = 3;
        }else if($toeicscore >= 535){
            $unit = 2;
        }else if($toeicscore >= 470){
            $unit = 1;
        }else{
            $unit = 0;   
        }
        return $unit;
    }

    private function calCommonUnit($department){
        $commonmap = array(
            "M" => self::TOTAL_COMMON_MEDS,
            "E" => self::TOTAL_COMMON_MEDS,
            "D" => self::TOTAL_COMMON_MEDS,
            "S" => self::TOTAL_COMMON_MEDS,
            "C" => self::TOTAL_COMMON_C,
            "N" => 0
        );
        return $commonmap[$department];
    }
}
