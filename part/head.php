<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | 웹 퍼블리셔 김기태</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="/resource/img/favicon.png">
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- fontaswome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-- StyleSheet -->
    <link rel="stylesheet" href="resource/common.css">
    <link rel="stylesheet" href="resource/section-1.css">
    <link rel="stylesheet" href="resource/section-2.css">
    <link rel="stylesheet" href="resource/section-3.css">
    <link rel="stylesheet" href="resource/section-4.css">
    <link rel="stylesheet" href="resource/section-5.css">
    <link rel="stylesheet" href="resource/media.css">
    <script src="resource/common.js"></script>
</head>

<body>
    <!-- top-menu-bar HTML -->
    <div class="popup-background"></div>
    <div class="top-menu-bar fixed">
        <ul class="con flex flex-jc-sa">
            <li class="flex flex-ai-c" onClick="scroll_move('1')">Home</li>
            <li class="flex flex-ai-c" onClick="scroll_move('2')">About Me</li>
            <li class="flex flex-ai-c" onClick="scroll_move('3')">Skill</li>
            <li class="flex flex-ai-c" onClick="scroll_move('4')">Portfolio</li>
            <li class="flex flex-ai-c" onClick="scroll_move('5')">Contact</li>
        </ul>
    </div>
    <div class="mobile-top-menu-bar fixed">
        <div class="bars-btn absolute">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <nav class="fixed">
            <ul>
                <li class="block" onClick="scroll_move('1')">Home</li>
                <li class="block" onClick="scroll_move('2')">About Me</li>
                <li class="block" onClick="scroll_move('3')">Skill</li>
                <li class="block" onClick="scroll_move('4')">Portfolio</li>
                <li class="block" onClick="scroll_move('5')">Contact</li>
            </ul>
        </nav>

    </div>