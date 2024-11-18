<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="/framework/bootstrap/css/bootstrap.css" rel="stylesheet"/>

    <style src="/framework/bootstrap/js/bootstrap.js"></style>
</head>
<body>
    <header class="py-4 border border-dark ">
        <div class="row">
            <div class="col">Header</div>
            <div class="col">
                <div class="form-check form-switch mx-4">
                    <input
                        class="form-check-input p-2"
                        type="checkbox"
                        role="switch"
                        id="flexSwitchCheckChecked"
                        checked
                        onclick="myFunction()"
                    />
                </div>
            </div>
        </div>
    </header>

    <!-- main container between header and footer -->
    <div class="container d-flex flex-column">

    <!-- "container" for site sections -->
    <div class="d-flex flex-column my-3">

        <!-- card for LinuxHQ Section -->
        <div class="border border-dark w-75 mx-auto p-3">
            <div class="row">
                <div class="col">
                    <div class="fs-4">Linux HQ</div>
                    <div>
                        Linux Distribution and Desktop information, including:

                        <ul>
                            <li>Description, Version info, screenshots,</li>
                            <li>Theme and Icon information for those wanting to customize their system's appearance,</li>
                            <li>and more.</li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="placeholder">
                    Christmas Tree image
                    Photo by Tessa Rampersad on Unsplash
                    </div>
                </div>
            </div>
        </div>

        <!-- card for TechHQ Section -->
        <div class="border border-dark w-75 mx-auto p-3">
            <div class="row">
                <div class="col placeholder">
                    Christmas house decoration image
                    Photo by James Wheeler on Unsplash
                </div>
                <div class="col">
                    <div class="fs-4">TechHQ Section</div>
                    <div>
                        Software suggestions and Web Browser/Browser Addon recommendations -
                        Including
                        <ul>
                            <li>Cross-platform options for Windows and Linux</li>
                            <li>Security tips to keep your computer secure.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>




<div class="fs-2">My Git Projects</div>

<div class="row d-flex justify-content-between my-3">
    <div class="card w-25">
        <div class="card-body">
            <div class="card-title">Linux Setup</div>
            <div class="card-text">

                Helps a user setup Linux by:

                <ul>
                    <li>Installing Updates and (when appropriate) optimizing mirrors</li>
                    <li>Lets the user install various softwares and/or themes</li>
                    <li> Installs/Enables some third party repos that update the software selection they can install</li>
                </ul>

                Distro bases supported:
                <ul>
                    <li>Arch</li>
                    <li>Debian</li>
                    <li>Fedora</li>
                    <li>OpenSUSE</li>
                    <li>Solus</li>
                    <li>Ubuntu</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card w-25">
        <div class="card-body">
            <div class="card-title">Linux Theming</div>
            <div class="card-text">
            This originally was going to be a part of the LinuxSetup scripts, though it grew too much and I decided to branch it out. This installs themes and icon packs of well liked Linux Themes into your system. I have alot of plans for this for version and distro detection.
            </div>
        </div>
    </div>
</div>

</div>




<script src="/scripts/mode_toggle.js"></script>


</body>
</html>
