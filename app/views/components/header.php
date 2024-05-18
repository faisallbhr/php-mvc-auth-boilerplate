<header class="bg-white relative flex justify-between lg:justify-end lg:gap-2 items-center px-4 py-6 shadow">
    <button id="openSidebar" class="lg:hidden w-7 h-7">
        <svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" fill="#1c2434">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <title>Menu</title>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Menu">
                        <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect>
                        <line x1="5" y1="7" x2="19" y2="7" id="Path" stroke="#1c2434" stroke-width="1.5"
                            stroke-linecap="round"> </line>
                        <line x1="5" y1="17" x2="19" y2="17" id="Path" stroke="#1c2434" stroke-width="1.5"
                            stroke-linecap="round"> </line>
                        <line x1="5" y1="12" x2="19" y2="12" id="Path" stroke="#1c2434" stroke-width="1.5"
                            stroke-linecap="round"> </line>
                    </g>
                </g>
            </g>
        </svg>
    </button>
    <div>
        <span><?php echo $_SESSION['user']['name'] ?></span>
        <button id="dropdownTrigger" class="p-2">
            <svg className="hidden fill-current sm:block" width="12" height="8" viewBox="0 0 12 8" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path fillRule="evenodd" clipRule="evenodd"
                    d="M0.410765 0.910734C0.736202 0.585297 1.26384 0.585297 1.58928 0.910734L6.00002 5.32148L10.4108 0.910734C10.7362 0.585297 11.2638 0.585297 11.5893 0.910734C11.9147 1.23617 11.9147 1.76381 11.5893 2.08924L6.58928 7.08924C6.26384 7.41468 5.7362 7.41468 5.41077 7.08924L0.410765 2.08924C0.0853277 1.76381 0.0853277 1.23617 0.410765 0.910734Z"
                    fill="#1c2434" />
            </svg>
        </button>
    </div>
    <div id="dropdown"
        class="absolute right-6 top-20 duration-100 ease-in w-40 bg-white shadow-md rounded overflow-hidden divide-y gap-2 hidden">
        <a href="/logout" class="py-2 hover:bg-gray-200 px-4 block">
            <button class="text-tes">Logout</button>
        </a>
    </div>
</header>