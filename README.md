<h2>Instalacja</h2>
<ol>
    <li>Sklonuj repozytorium</li>
    <li>Użyj <pre>
composer install
npm install
npm run dev
</pre></li>
    <li>Skopiuj i zmień nazwę pliku .env.example na .env</li>
    <li>Wprowadź poprawne dane do logowania z bazą w pliku .env</li>
    <li>Wykonaj <pre>
php artisan migrate
</pre> lub <pre>
php artisan migrate --seed
</pre></li>
    <li><strong>Skonfiguruj virtual host dla aplikacji!</strong></li>
    <li>Do poprawnego działania zaplanowanych Jobów, należy uruchomić w tle dwie komendy <pre>
php artisan queue:work
</pre> oraz <pre>
php artisan schedule:work
</pre></li>
</ol>
<h2>API</h2>
<br />
<strong>Do poprawnego działania API, zaleca się ustawienie w headers Accept na application/json</strong>
<br />
<br />
<table>
    <thead>
        <tr>
            <th>Endpoint</th>
            <th>Metoda</th>
            <th>Opis</th>
            <th>Dodatkowe</th>
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
