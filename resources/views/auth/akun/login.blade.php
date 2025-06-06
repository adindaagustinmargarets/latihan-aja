<form action="/login" method="post">
    @csrf
    <input type="text" name="email">
    <input type="text" name="password">
    <button type="submit">Login</button>
</form>