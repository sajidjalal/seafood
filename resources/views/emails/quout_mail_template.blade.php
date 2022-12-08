@extends('emails.mailHeaderFooter')

@section('content')
    {!! $user_mail_data['mail_body'] !!}
    {{-- {!! $mail_body !!} --}}
@endsection
