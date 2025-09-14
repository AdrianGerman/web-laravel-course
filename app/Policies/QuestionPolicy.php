<?php

namespace App\Policies;

use App\Models\Question;
use App\Models\User;

class QuestionPolicy
{
    public function delete(User $user, Question $question)
    {
        return $user->id === $question->user_id;
    }

    public function update(User $user, Question $question)
    {
        return $user->id === $question->user_id;
    }
}