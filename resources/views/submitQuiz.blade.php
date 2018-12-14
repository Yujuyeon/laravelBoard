@extends('master')
@section('content')
    퀴즈 내기
    <form action="/quiz" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            <label>문제</label>
            <input type="text" name="quiz">
            <br>
            정답
            <input type="text" name="answer">
            <br>
            보기
            <input type="text" name="example1">
            <input type="text" name="example2">
            <input type="text" name="example3">
            <br>
        <input type="submit">
    </form>

@stop