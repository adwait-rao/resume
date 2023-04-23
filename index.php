<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Resume Builder</title>
</head>
<body>
  <!-- Heading Title -->
  <h1 class=" font-bold text-4xl text-center my-4 w-[100%] block text-sky-600">
    ResumeBuilder
  </h1>
  <form name="Resume Form" action="generatePdf.php" method="post">
    <div class="grid grid-flow-row grid-cols-2 mx-[20%]">

      <!-- input field and its name -->
      <div class="mx-4 my-4">
        <p class="my-2">Name</p>
        <div class="ring-2 rounded-xl px-4 py-4">
          <input name="name" type="text" placeholder="e.g. Adwait Prasad Rao" class="outline-none w-[90%]">  
        </div>
      </div>

      <div class="mx-4 my-4">
        <p class="my-2">Email ID</p>
        <div class="ring-2 rounded-xl px-4 py-4">
          <input name="email" type="email" placeholder="e.g. jonh@example.com" class="outline-none w-[90%]">  
        </div>
      </div>

      <div class="mx-4 my-4">
        <p class="my-2">Gender</p>
        <div class="ring-2 rounded-xl px-4 py-4">
          <!-- <input name="name" type="text" placeholder="e.g. Adwait Prasad Rao" > -->
          <select name="gender" class="outline-none w-[90%] ">
            <option value="none">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
      </div>

      <div class="mx-4 my-4">
        <p class="my-2">Date Of Birth</p>
        <div class="ring-2 rounded-xl px-4 py-4">
          <input name="dob" type="date" placeholder="" class="outline-none w-[90%]">  
        </div>
      </div>

      <div class="mx-4 my-4">
        <p class="my-2">Address</p>
        <div class="ring-2 rounded-xl px-4 py-4">
          <input name="address" type="address" placeholder="Enter your full address" class="outline-none w-[90%]">  
        </div>
      </div>

      <div class="mx-4 my-4">
        <p class="my-2">School/College Name</p>
        <div class="ring-2 rounded-xl px-4 py-4">
          <input name="education" type="text" placeholder="e.g K.K. Wagh Polytechnic Nashik" class="outline-none w-[90%]">  
        </div>
      </div>

      <div class="mx-4 my-4">
        <p class="my-2">Skills (Separated By ',')</p>
        <div class="ring-2 rounded-xl px-4 py-4">
          <input name="skills" type="address" placeholder="Enter your full address" class="outline-none w-[90%]">  
        </div>
      </div>

      <div class="mx-4 my-4">
        <p class="my-2">Personal Projects (Links)</p>
        <div class="ring-2 rounded-xl px-4 py-4">
          <input name="projects" type="text" placeholder="Project names (Separated By ',')" class="outline-none w-[90%]">  
        </div>
      </div>

      <div class="mx-4 my-4">
        <p class="my-2">Profile Summary</p>
        <div class="ring-2 rounded-xl px-4 py-4">
          <input name="summary" type="address" placeholder="Type your profile summary" class="outline-none w-[90%]">  
        </div>
      </div>

      <div class="mx-4 my-4">
        <p class="my-2">Current Designation</p>
        <div class="ring-2 rounded-xl px-4 py-4">
          <input name="designation" type="text" placeholder="e.g Full Stack Developer" class="outline-none w-[90%]">  
        </div>
      </div>
      <div class="col-span-2">
        <button class="bg-[#006ed2] ml-[40%] my-6 w-[20%] rounded-xl px-4 py-4 text-white" type="submit">Submit</button>
      </div>
    </div>
  </form>

</bodys>
</html>
