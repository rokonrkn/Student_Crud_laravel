<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

  <!-- Student Form -->
  <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
    <div class="" id='success'></div>
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-700">Student Form</h2>
    
    <form action="{{route('info.store')}}" method="POST" class="space-y-4">
      @csrf
      <!-- Name -->
      <div>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
          Full Name
        </label>
        <input type="text" id="name" name="name" placeholder="Enter your full name"  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      @error('name')
        <div class='text-red-500'>{{ $message }}</div>
      @enderror
      <!-- Email -->
      <div>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
          Email
        </label>
        <input type="email" id="email" name="email" placeholder="Enter your email"  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      @error('email')
        <div class='text-red-500'>{{ $message }}</div>
      @enderror

      <!-- Date of Birth -->
      <div>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="dob">
          Date of Birth
        </label>
        <input type="date" id="dob" name="dob"  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>
      @error('dob')
        <div class='text-red-500'>{{ $message }}</div>
      @enderror

      <!-- Gender -->
      <div>
        <label class="block text-gray-700 text-sm font-bold mb-2" for="gender">
          Gender
        </label>
        <select id="gender" name="gender"  class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
          <option value="" disabled selected>Select your gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>
      @error('gender')
        <div class='text-red-500'>{{ $message }}</div>
      @enderror

      <!-- Submit Button -->
      <div class="text-center">
        <button type="submit" id='submitBtn' class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
          Submit
        </button>
      </div>

    </form>
  </div>
</body>
</html>
