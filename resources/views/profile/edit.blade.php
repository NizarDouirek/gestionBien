<section class="profile-section">
    <div class="background-image">
        <div class="container">
            <header>
                <h2>Profile</h2>
            </header>
            <div class="content">
                <div class="card">
                    <div class="card-header">Update Profile Information</div>
                    <div class="card-body">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Update Password</div>
                    <div class="card-body">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Delete Account</div>
                    <div class="card-body">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
       * {
    margin: 0;
    padding: 0;
    
}
    /* Styles for the profile section */
.profile-section {
    padding: 50px 0;
    background: url("/imgs/c1.avif") no-repeat;
    background-size: cover;
    height: 87%;
    background-position: center;
    font-size: cover;
    background-position: center;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 20px;
}

header {
    text-align: center;
    margin-bottom: 30px;
}

h2 {
    font-size: 2em;
    color: white;
}

.content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.card {
    width: calc(33.33% - 20px);
    background-color:transparent;
    color: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.card-header {
    background-color: #f0f0f0;
    color: black;
    padding: 15px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.card-body {
    padding: 20px;
}

/* Styles for form elements */
input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    outline: none;
    border-color: #007bff;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

</style>