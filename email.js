function sendEmail() {
  Email.send({
    Host: "smtp.gmail.com",
    Username: "andreastunggono.at@gmail.com",
    Password: "Your Gmail Password",
    To: "andreastunggono.at@gmail.com",
    From: "sender’s email address",
    Subject: "email subject",
    Body: "email body",
    Attachments: [
      {
        name: "smtpjs.png",
        path: "https://networkprogramming.files.wordpress.com/2017/11/smtpjs.png",
      },
    ],
  }).then((message) => alert("mail sent successfully"));
}
