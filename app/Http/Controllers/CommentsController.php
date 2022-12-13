<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $team_id)
    {

        $request->validate(
            [
                'content' => 'required | min:10'
            ]
        );

        $team = Team::findOrFail($team_id);

        Comment::create([
            'content' => request('content'),
            'team_id' => $team->id,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->route('single-team', ['id' => $team_id]);
    }
}
