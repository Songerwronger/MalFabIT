const validation = new JustValidate("#newpass");

validation
  


    .addField("#logpass", [

        {
           rule: "required" 
        },
        {
           rule: "password"
        }

    ])


    .onSuccess((event) => {
        document.getElementById("newpass").submit();
    });