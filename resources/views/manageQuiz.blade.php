@extends('master')
@section('content')
    <div class="container">
        <h1>퀴즈 목록 <button onclick="location.href='/submitQuiz'">등록</button> </h1>
        <hr/>
        <ul>
            @forelse($quizzes as $quiz)        
            <details>
                <summary>
                    {{ $quiz->id .'번 문제: ' . $quiz->question }}                
                </summary>
                <p>
                    {{  '보기: ' . $quiz->examples }} <br />
                    {{'정답: ' . $quiz->answer }} <br />
                    <button>수정</button>
                    <button>삭제</button>
                </p>
            </details>
                        
            @empty
           <p>no items</p> 
            @endforelse 
        </ul>

    </div>
@stop
