<!DOCTYPE html>
<html lang="en">

<head>
    <meta>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {},
            },
            plugins: [],
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link rel="icon" type="image/png" href="images/logo.png">
    <title>Teller Page</title>
</head>

<body>

    <div
        class="min-h-screen bg-gradient-to-b from-orange-400 from-5% via-orange-200 via-30% to-orange-50 to-60% relative bg-fixed">
        <div
            class="absolute inset-0 bg-[url('images/backgroundPhoto1.png')] bg-cover bg-center opacity-15 z-0 bg-fixed">
        </div>
        <div class="relative z-10">
            <nav class="relative flex items-center p-4 font-semibold">
                <!-- Logo -->
                <div class="absolute top-0 left-9 -mt-1">
                    <img src="images/logo.gif" alt="" class="h-26 w-auto">
                </div>



                <div class="flex gap-12 ml-60 mt-5">
                    <a href=""
                        class="text-gray-800 hover:text-orange-500 dark:text-gray-200 dark:hover:text-orange-300 transition-colors duration-200">Dashboard</a>
                    <a href=""
                        class="text-gray-800 hover:text-orange-500 dark:text-gray-200 dark:hover:text-orange-300 transition-colors duration-200">Loading
                        Station</a>
                    <a href=""
                        class="text-gray-800 hover:text-orange-500 dark:text-gray-200 dark:hover:text-orange-300 transition-colors duration-200">User
                        Registration</a>
                    <a href=""
                        class="text-gray-800 hover:text-orange-500 dark:text-gray-200 dark:hover:text-orange-300 transition-colors duration-200">Card
                        Management</a>
                    <a href=""
                        class="text-gray-800 hover:text-orange-500 dark:text-gray-200 dark:hover:text-orange-300 transition-colors duration-200">Ticket
                        Management</a>
                    <a href=""
                        class="text-gray-800 hover:text-orange-500 dark:text-gray-200 dark:hover:text-orange-300 transition-colors duration-200">Sales</a>
                    <a href="" class="text-black dark:text-red-500">Test Link</a>
                </div>


                <div class="ml-auto flex items-center gap-1 mr-16">
                    <button id="darkmodeToggle">
                        <i class="fa-solid fa-moon cursor-pointer text-2xl"></i>
                    </button>
                    <img src="images/monkeAvatar2.png" alt="" class="h-10 w-auto rounded-full">
                    <a href="">tondoteller1</a>
                </div>
            </nav>

            <div class="flex w-full justify-between mt-4">
                <div class="flex flex-col items-start mx-20 mt-6"><!--Teller Details-->
                    <div class="flex">
                        <h1 class="font-semibold text-lg">Teller Name: </h1>
                        <h1 class="text-lg mx-2">Tondo T. Teller</h1>
                    </div>
                    <div class="flex">
                        <h1 class="font-semibold text-lg">Teller ID: </h1>
                        <h1 class="text-lg mx-2">#12345612731</h1>
                    </div>
                </div>

                <div class="flex flex-col items-end mx-20 mt-6"> <!--Jackpot-->
                    <h1 class="font-semibold text-2xl">Jackpot is currently</h1>
                    <h1 class="font-bold text-5xl my-1">$999,999,999</h1>
                    <h1 class="bg-black font-semibold text-white rounded-lg px-2 mt-1">Draw closes at SEPT 23, 9:00 PM
                    </h1>
                </div>
            </div>

            <div class="flex mx-20 my-16">
                <div class="bg-white mx-auto rounded-2xl shadow-2xl w-140 h-160 opacity-85">
                    <!--Barcode Section-->
                    <h1 class="m-4 font-semibold text-xl">Scan / Enter Barcode</h1>
                    <form action="" class="flex flex-col m-4">
                        <label for="">Enter or Scan Barcode Below: </label>
                        <input type="text" placeholder="Scan or enter barcode..."
                            class="border border-gray-300 rounded-lg p-2 my-2">
                        <div class="flex mt-1">
                            <div
                                class="text-center bg-blue-100 p-2 rounded-xl w-1/2 mx-1 hover:bg-blue-200 transition-colors duration-200">
                                <i class="fa-solid fa-rotate-left"></i>
                                <button>Reset</button>
                            </div>

                            <button
                                class="bg-blue-500 text-white font-semibold p-2 rounded-xl w-1/2 mx-1 hover:bg-blue-600 transition-colors duration-200">Submit
                                Barcode</button>
                        </div>
                        <hr class="my-4 border-t-2 border-dotted border-gray-400">

                        <div class="grid grid-cols-2 w-full">
                            <h1 class="font-semibold text-xl">Customer Details</h1>
                            <h1 class="font-semibold"> - </h1>
                        </div>
                        <hr class="my-4 border-gray-200">

                        <div class="grid grid-cols-2 w-full">
                            <h1 class="text-md font-semibold">Full Name</h1>
                            <h1 class="font-semibold"> - </h1>
                        </div>
                        <hr class="my-4 border-gray-200">

                        <div class="grid grid-cols-2 w-full">
                            <h1 class="text-md font-semibold">Username</h1>
                            <h1 class="font-semibold"> - </h1>
                        </div>
                        <hr class="my-4 border-gray-200">

                        <div class="grid grid-cols-2 w-full">
                            <h1 class="text-md font-semibold">Email Address</h1>
                            <h1 class="font-semibold"> - </h1>
                        </div>
                        <hr class="my-4 border-gray-200">

                        <div class="grid grid-cols-2 w-full">
                            <h1 class="text-md font-semibold">Contact Number</h1>
                            <h1 class="font-semibold"> - </h1>
                        </div>
                        <hr class="my-4 border-gray-200">

                        <div
                            class="grid grid-cols-2 w-full bg-green-200 border-2 border-green-500 rounded-xl py-10 px-4">
                            <h1 class="text-2xl font-semibold">Balance</h1>
                            <h1 class="font-semibold"> - </h1>
                        </div>
                    </form>
                </div>
                <div class="bg-white w-140 h-160 mx-10 rounded-2xl shadow-2xl opacity-85">
                    <h1 class="m-4 font-semibold text-xl">Ticket Combination</h1>

                    <!-- Letter Boxes -->
                    <div class="flex justify-center items-center gap-3 mx-5 mt-8">
                        <div
                            class="square h-14 w-14 border border-gray-500 font-bold flex items-center justify-center rounded-lg text-2xl">
                        </div>
                        <div
                            class="square h-14 w-14 border border-gray-500 font-bold flex items-center justify-center rounded-lg text-2xl">
                        </div>
                        <div
                            class="square h-14 w-14 border border-gray-500 font-bold flex items-center justify-center rounded-lg text-2xl">
                        </div>
                        <div
                            class="square h-14 w-14 border border-gray-500 font-bold flex items-center justify-center rounded-lg text-2xl">
                        </div>
                    </div>

                    <div id="colorSelection" class="flex gap-2 mt-4 hidden justify-center">
                        <button type="button" class="colorBtn bg-red-500 w-10 h-10 rounded-full"
                            onclick="selectColor('Red', this)"></button>
                        <button type="button" class="colorBtn bg-blue-500 w-10 h-10 rounded-full"
                            onclick="selectColor('Blue', this)"></button>
                        <button type="button" class="colorBtn bg-green-500 w-10 h-10 rounded-full"
                            onclick="selectColor('Green', this)"></button>
                        <button type="button" class="colorBtn bg-yellow-400 w-10 h-10 rounded-full"
                            onclick="selectColor('Yellow', this)"></button>
                    </div>

                    <!-- Hidden inputs -->
                    <input type="hidden" name="combination" id="combination">
                    <input type="hidden" name="color" id="color">


                    <form method="POST" class="mt-6 mx-5">
                        <?php
                        $rows = [
                            range('A', 'G'),   // 7 letters
                            range('H', 'N'),   // 7 letters
                            range('O', 'U'),   // 7 letters
                            range('V', 'Z')    // 5 letters
                        ];
                        ?>

                        <div class="space-y-2">
                            <?php foreach ($rows as $row): ?>
                                <div class="flex justify-center mx-0 gap-2">
                                    <?php foreach ($row as $letter): ?>
                                        <button type="button"
                                            class="letterBtn bg-gray-200 hover:bg-orange-300 p-6 rounded font-semibold"
                                            onclick="selectLetter('<?php echo $letter; ?>', this)">
                                            <?php echo $letter ?>
                                        </button>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>



                        <div class="flex justify-center mt-4 gap-2">
                            <button type="button" onclick="clearSelection()"
                                class="mt-4 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 w-1/2">
                                Clear
                            </button>

                            <input type="hidden" name="combination" id="combination">
                            <button type="submit"
                                class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 w-1/2">
                                Submit Combination
                            </button>
                        </div>

                    </form>
                </div>
                <div class="bg-white w-140 h-160 mx-auto rounded-2xl shadow-2xl opacity-85">
                    <h1 class="m-4 font-semibold text-xl text-orange-900">Subscription</h1>
                    <div class="flex flex-col border border-gray-400 rounded-lg p-2 mx-4 my-4">
                        <h1 class="font-semibold text-md p-0">$120</h1>
                        <h1 class="text-sm p-0">1 day</h1>
                    </div>
                    <div class="flex flex-col border border-gray-400 rounded-lg p-2 mx-4 my-4">
                        <h1 class="font-semibold text-md p-0">$120</h1>
                        <h1 class="text-sm p-0">3 days</h1>
                    </div>
                    <div class="flex flex-col border border-gray-400 rounded-lg p-2 mx-4 my-4">
                        <h1 class="font-semibold text-md p-0">$120</h1>
                        <h1 class="text-sm p-0">5 days</h1>
                    </div>
                    <div class="flex flex-col border border-gray-400 rounded-lg p-2 mx-4 my-4">
                        <h1 class="font-semibold text-md p-0">$120</h1>
                        <h1 class="text-sm p-0">15 days</h1>
                    </div>
                     <div class="flex flex-col border border-gray-400 rounded-lg p-2 mx-4 my-4">
                        <h1 class="font-semibold text-md p-0">$120</h1>
                        <h1 class="text-sm p-0">30 days</h1>
                    </div>
                    <div class="flex gap-2">
                        <button
                            class="bg-blue-500 p-4 font-semibold text-white rounded-lg w-1/2  ml-2 hover:bg-blue-600  transition-colors duration-200 ">Show
                            Details</button>
                        <button
                            class="bg-green-500 p-4 font-semibold text-white rounded-lg w-1/2  mr-2 hover:bg-green-600 transition-colors duration-200 ">Purchase
                            Now</button>
                    </div>
                    <button
                        class="border border-gray-500 rounded-lg p-4 my-4 mx-2 w-[calc(100%-1rem)] hover:bg-red-500 hover:text-white hover:border-white transition-colors duration-200 font-semibold">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let selected = [];
        let selectedColor = "";

        function selectLetter(letter, btn) {
            if (selected.length >= 4) {
                alert("You can only select 4 letters.");
                return;
            }
            if (selected.includes(letter)) {
                alert("This letter is already selected.");
                return;
            }

            // Add letter to selection
            selected.push(letter);
            btn.disabled = true;

            // Place letter in next available square
            let boxes = document.querySelectorAll(".square");

            // Remove previous highlight
            boxes.forEach(box => box.classList.remove("ring-4", "ring-orange-400", "shadow-orange-400"));

            // Highlight current box
            let currentBox = boxes[selected.length - 1];
            currentBox.innerText = letter;
            currentBox.classList.add("ring-4", "ring-orange-400", "shadow-orange-400");

            // Update hidden input
            document.getElementById('combination').value = selected.join('');

            // Show color selection if 4 letters selected
            if (selected.length === 4) {
                document.getElementById('colorSelection').classList.remove('hidden');
            }
        }

        function clearSelection() {
            selected = [];
            selectedColor = "";

            // Clear boxes and highlights
            document.querySelectorAll(".square").forEach(box => {
                box.innerText = "";
                box.classList.remove("ring-4", "ring-orange-400", "shadow-orange-400");
            });

            // Re-enable all letter buttons
            document.querySelectorAll(".letterBtn").forEach(btn => {
                btn.disabled = false;
            });

            // Reset color selection
            document.querySelectorAll(".colorBtn").forEach(btn => {
                btn.classList.remove("ring-4", "ring-orange-400");
            });

            // Hide color selection
            document.getElementById('colorSelection').classList.add('hidden');

            // Clear hidden inputs
            document.getElementById('combination').value = "";
            document.getElementById('color').value = "";
        }

        function selectColor(color, btn) {
            // Deselect previous color
            document.querySelectorAll(".colorBtn").forEach(b => b.classList.remove("ring-4", "ring-orange-400"));

            // Highlight selected color
            btn.classList.add("ring-4", "ring-orange-400");

            selectedColor = color;
            document.getElementById('color').value = selectedColor;
        }


        const toggleBtn = document.getElementById('darkmodeToggle');
        const html = document.documentElement;

        toggleBtn.addEventListener('click', () => {
            html.classList.toggle('dark');
            if (html.classList.contains('dark')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
        });


        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        }
    </script>

</body>

</html>