@extends('layouts.app')

@section('content')
    <div class="row mb-3 py-3">
        <div class="col-sm-12">
            <div class="alert alert-primary" role="alert">
                <strong>Wszystkie wymagane dane, należy podać jako obiekt klasy PostRequest, albo CommentRequest!</strong>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-12">
            <table class="table table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">Endpoint</th>
                        <th scope="col">Metoda</th>
                        <th scope="col">Opis</th>
                        <th scope="col">Dodatkowe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><pre>/api/posts</pre></td>
                        <td>GET</td>
                        <td>Zwraca liste wszystkich postów</td>
                        <td>Paginacja <pre>?page=X</pre></td>
                    </tr>
                    <tr>
                        <td><pre>/api/post/{post}</pre></td>
                        <td>GET</td>
                        <td>Zwraca dane wybranego postu</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><pre>/api/posts</pre></td>
                        <td>POST</td>
                        <td>Dodaje nowy post do bazy</td>
                        <td>Wymagane<br/><pre>
    title: required|string|max:128,
    content: required|string
    author: required|string|max:128</pre></td>
                    </tr>
                    <tr>
                        <td><pre>/api/post/{post}</pre></td>
                        <td>PUT</td>
                        <td>Aktualizuje wybrany post</td>
                        <td>Wymagane<br/><pre>
    title: required|string|max:128
    content: required|string
    author: required|string|max:128</pre></td>
                    </tr>
                    <tr>
                        <td><pre>/api/post/{post}</pre></td>
                        <td>DELETE</td>
                        <td>Usuwa wybrany post</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><pre>/api/comments</pre></td>
                        <td>GET</td>
                        <td>Zwraca liste wszystkich postów</td>
                        <td>Paginacja <pre>?page=X</pre></td>
                    </tr>
                    <tr>
                        <td><pre>/api/comment/{comment}</pre></td>
                        <td>GET</td>
                        <td>Zwraca dane wybranego komentarza</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><pre>/api/comments/{post}</pre></td>
                        <td>POST</td>
                        <td>Tworzy nowy komentarz dla wybranego postu</td>
                        <td>Wymagane<br/><pre>
    content: required|string
    author: required|string|max:128</pre></td>
                    </tr>
                    <tr>
                        <td><pre>/api/comment/{comment}</pre></td>
                        <td>PUT</td>
                        <td>Aktualizuje wybrany komentarz</td>
                        <td>Wymagane<br/><pre>
    content: required|string
    author: required|string|max:128</pre></td>
                    </tr>
                    <tr>
                        <td><pre>/api/comment/{comment}</pre></td>
                        <td>DELETE</td>
                        <td>Usuwa wybrany komentarz</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
