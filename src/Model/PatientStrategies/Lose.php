<?php

namespace DevCapu\NutriLive\App\Model\PatientStrategies;

class Lose implements Objective
{
    private $PerCentNeedToCommitObjective = 0.77;
    public function calculateCaloriesToBeIngestedToCommitObjective(float $totalEnergyExpenditure): float
    {
        return $totalEnergyExpenditure * $this->PerCentNeedToCommitObjective;
    }
}
