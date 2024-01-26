<?php
include 'StudyPlan.php';

function getStudentsWithoutSuitablePlan($studentList,$studyPlan) {
    $arr = [];
    for ($i = 0; $i < count($studentList); $i++) {
        $conditionMet = false;
        for ($j = 0; $j < count($studyPlan); $j++) {
            if ($studentList[$i]['program_id'] == $studyPlan[$j]['program_id'] &&
                $studentList[$i]['year_id'] == $studyPlan[$j]['year_id'] &&
                $studentList[$i]['spec_id'] == $studyPlan[$j]['spec_id']) {

                $conditionMet = true;
                break;
            }
        }

        if (!$conditionMet&&$studentList[$i]['actual']) {

            $arr[] = $studentList[$i];
        }
    }
    return $arr;
}

function createStudyPlan($arr){
    $arr2 = [];
    for($i = 0; $i<count($arr);$i++){
        $arr2[$i] = [
            'program_id'=>$arr[$i]['program_id'],
            'year_id'=>$arr[$i]['year_id'],
            'spec_id'=>$arr[$i]['spec_id'],
        ];
    }
    return array_unique($arr2, SORT_REGULAR);
}




print_r(createStudyPlan(getStudentsWithoutSuitablePlan($studentList,$studyPlan)));

