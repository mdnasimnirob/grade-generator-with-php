<?php
$grade = "";
$result = "";

if (isset($_POST["submit"])) {
    $grade = $_POST["name"];

    // echo "$grade";
    if ($grade >= 80 && $grade <= 100) {
        $result = "A+";
    } elseif ($grade >= 70 && $grade <= 79) {
        $result = "A";
    } elseif ($grade >= 60 && $grade <= 69) {
        $result = "A-";
    } elseif ($grade >= 50 && $grade <= 59) {
        $result = "B";
    } elseif ($grade >= 40 && $grade <= 49) {
        $result = "C";
    } elseif ($grade >= 33 && $grade <= 39) {
        $result = "D";
    } elseif ($grade >= 0 && $grade <= 32) {
        $result = "F";
    } else {
        $result = "invalid ! please write number";
    }

}
?>

<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Ganerator</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body>
    <header></header>
    <main class="lg:container mx-auto flex flex-col mt-3 gap-1">

        <section
            class="border-blue-300 border lg:w-4/12 mx-auto flex justify-center items-center rounded-t-lg shadow-md">
            <div
                class="flex items-center justify-center text-center text-lg font-semibold text-black rounded-sm bg-slate-100 shadow-2xl border-white lg:px-2 md:p-1 ">
                <h3 class="">Simple Grade Calculator</h3>
            </div>

        </section>

        <section>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label class="input input-bordered mx-auto flex lg:w-4/12 w-2/3 items-center gap-2 shadow-2xl">

                    <input type="text" name="name" class="grow" placeholder="Search" required />
                    <button type="submit" name="submit"><svg class="w-4 opacity-70 " xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512">
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                        </svg></button>
                </label>
                <div class="text-center  ">
                    <h2><?php
                    echo "<div>Your search this is: $grade</div>"

                        ?></h2>
                </div>
            </form>
            <!-- Display the result -->
            <?php if (!empty($result)): ?>
                <div
                    class="mx-auto flex w-4/12 items-center text-center justify-center gap-2 shadow-2xl mt-4 p-3 bg-gray-100 rounded-md">
                    <strong>Result:</strong> <?php echo $result; ?>
                </div>
            <?php endif; ?>
        </section>


    </main>
    <footer class=""></footer>
</body>

</html>