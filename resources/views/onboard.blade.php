<h1>User Onboarding</h1>
<form method="POST" action="/onboard">
    @csrf
    <label>First Name: <input type="text" name="firstName" required></label><br>
    <label>Last Name: <input type="text" name="lastName" required></label><br>
    <label>Email: <input type="email" name="email" required></label><br>
    <label>Password: <input type="password" name="password" required></label><br>
    <label>Phone Number: <input type="text" name="phoneNumber" required></label><br>
    <label>Age: <input type="number" name="age" required></label><br>
    <label>Gender: <input type="text" name="gender" required></label><br>
    <label>Address: <input type="text" name="address" required></label><br>
    <button type="submit">Onboard</button>
</form>
