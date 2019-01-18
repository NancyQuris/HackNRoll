@extends('layouts.app')

@section('content')
<p1>wlcome to chat</p1>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#F0EDB3">Chats</div>

                <div class="panel-body" style="background-color:#F0EFDB">
                    something2
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="panel-footer" style="background-color:#DCD77E">
                    form
                    <chat-form
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></chat-form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
