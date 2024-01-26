<?php
include 'StudyPlan.php';
$indexedStudyPlans = [];
foreach ($studyPlan as $plan) {
    $key = $plan['program_id'] . '-' . $plan['year_id'] . '-' . $plan['spec_id'];
    $indexedStudyPlans[$key] = $plan;
}

$result = [];
foreach ($studentList as $student) {
    if ($student['actual']) {
        $key = $student['program_id'] . '-' . $student['year_id'] . '-' . $student['spec_id'];
        if (!isset($indexedStudyPlans[$key])) {
            $result[] = [
                'program_id' => $student['program_id'],
                'year_id' => $student['year_id'],
                'spec_id' => $student['spec_id'],
            ];
            $indexedStudyPlans[$key] = true;
        }
    }
}

print_r($result);