@extends('master')
@section('content')
<h1>
    퀴즈 내기
</h1>
<hr />
    <form action="/quizs" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            문제&nbsp;&nbsp;
            <input type="text" name="quiz" style="width:500px; height:50px">
            <br>
            정답&nbsp;&nbsp;
            <input type="text" name="answer"style="width:500px;">
            <br>
            <li>

            보기1
            <input type="text" name="example1"style="width:500px;">
            </li>
            <li>
            보기2
            <input type="text" name="example2"style="width:500px;">
            </li>
            <li>

            보기3
            <input type="text" name="example3"style="width:500px;">
            </li>
            <br>
        <input type="submit">
    </form>

@stop