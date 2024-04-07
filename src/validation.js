const validation = new JustValidate("#signup");

validation
    .addField("#logname", [
        {
            rule: "required"
        }
    ])


    .addField("#logemail", [
        {
            rule: "required"
        },
        {
            rule: "email"
        },
        {
           validator:  (value) => () => {
                return fetch("valid-email.php?email=" + encodeURIComponent(value))
                        .then(function(response) {
                            return response.json();
                        })
                        .then(function(json) {
                            return json.available;
                        });
           },
           errorMessage: "Email is already taken"

        }
    ])


    .addField("#logpass", [

        {
           rule: "required" 
        },
        {
           rule: "password"
        }

    ])


    .onSuccess((event) => {
        document.getElementById("signup").submit();
    });