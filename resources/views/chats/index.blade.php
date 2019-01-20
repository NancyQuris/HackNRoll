@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row" id="app">
        {{-- <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chats</div>

                <div class="panel-body" style="background-color: #D3D3D3">
                    <chat-messages :messages="messages"></chat-messages>
                </div>
                <div class="panel-footer">
                    <chat-form
                        v-on:messagesent="addMessage"
                        :user="{{ Auth::user() }}"
                    ></chat-form>
                </div>
            </div>
        </div> --}}
        <div class="offset-4 col-4 offset-sm-1 col-sm-10">
            <li class="list-group-item active">
                CHHHHHAAAAT
                <span class="badge  badge-pill badge-danger"> @{{numberOfUsers}} </span>
            </li>
            <div class="badge badge-pill badge-primary">@{{ typing }}</div>
            <ul class="list-group" v-chat-scroll>
              <message v-for="value,index in chat.message" 
              :key=value.index 
              :color=chat.color[index]
              :time=chat.time[index]
              :user=chat.user[index]
              >
                  @{{value}}
              </message>
            </ul>
            <input type="text" class="form-control" placeholder="Pleassssse work"
                    v-model="message" @keyup.enter="send">
        </div>
    </div>
</div>

@endsection



