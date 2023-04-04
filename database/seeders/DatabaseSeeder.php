<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'utype' => 'ADM'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
            'utype' => 'ADM'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'rarmnsyah',
            'email' => 'rarmnsyah787@gmail.com',
            'utype' => 'USR'
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Barang',
            'slug' => 'barang',
            'image' => 'categoriy-thumb1.jpg'
        ]);
        \App\Models\Category::factory()->create([
            'name' => 'Jasa',
            'slug' => 'jasa',
            'image' => 'categoriy-thumb2.jpg'
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'ASUS ROG Strix Scar 15 Gaming Laptop',
            'slug' => 'ASUS-ROG-Strix-Scar-15-Gaming-Laptop',
            'short_description' => 'ASUS ROG Strix Scar 15 Gaming Laptop, 15.6” 240Hz
            IPS QHD Display, NVIDIA GeForce RTX 3070 Ti, Intel
            Core i9 12900H, 16GB DDR5, 1TB SSD, Per-Key RGB
            Keyboard, Windows 11 Home, G533ZW-AS94Q
            $2,048.73',
            'description' => 'Brand ASUS
            Series ROG Strix SCAR 15
            Screen Size 15.6 Inches
            Color Black
            Hard Disk
            Size
            
            1 TB
            CPU Model Core i9
            About this item
            • PEERLESS PROCESSING POWER - Speed through laptop gaming, streaming, and
            creating with the 12th Gen Intel Core i9-12900H Processor (6 P-cores and 8 E-cores)
            with 24M Cache and up to 5.0GHz clock speed.
            • RTX REALISM. IT’S ON - This Windows 11 gaming laptop is equipped with the
            GeForce RTX 3070 Ti laptop GPU with a max TGP of 150W and ROG Boost up to
            1460MHz, to give you the most realistic ray-traced graphics and cutting-edge AI
            features like NVIDIA DLSS.
            • ROG INTELLIGENT COOLING - The SCAR 15 takes cooling up to a notch, adding
            premium Thermal Grizzly liquid metal, Arc Flow fans, and 0dB Ambient Cooling
            • LIGHTNING FAST VISUALS - See everything with a swift 15.6” QHD/240Hz IPS type
            display, covering 100% DCI-P3 color for more vivid colors.
            • MUX SWITCH BOOST - A MUX Switch lets the GPU communicate directly with the
            display, increasing performance and decreasing latency
            • SAY GOODBYE TO SLOW LOAD TIMES - Store your entire game library on 1TB of
            swift PCIe 4.0 SSD and alt-tab almost instantly with 16GB of DDR5-4800 RAM.
            • CUSTOMIZE YOUR LAPTOP - Show off your personality with Aura-sync per-key
            RGB keyboard and light bar, and swappable armor caps, while an ROG Keystone II
            lets you save your gaming presets for quick access.
            • CONNECT TO EVERYTHING - Wi-Fi 6E with RangeBoost, Bluetooth 5.2, 1x
            Thunderbolt 4, 1x USB 3.2 Type-C (Gen2), 2x USB 3.2 Type-A (Gen1), 1x HDMI 2.1,
            1x 3.5mm Audio Jack, 1x 2.5 Gbps LAN
            • CLEAR COMMUNICATION - 3D AI Noise Canceling Microphone removes
            background noise for you and your teammates, while Dolby Vision and Dolby Atmos
            give you the best sound and visual fidelity
            • POWER UP - a large 90WHr battery lets you game from anywhere and 100W USB-C
            fast charging support keeps you topped up on the go',
            'regular_price' => 200,
            'category_id' => 1,
            'user_id' => 1,
            'quantity' => 12,
            'image' => '1-1.jpg'
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Wireless Keyboards and Mouse Combos',
            'slug' => 'Wireless-Keyboards-and-Mouse-Combos',
            'short_description' => 'Wireless Keyboards and Mouse Combos, UBOTIE
            Colorful Gradient Rainbow Colored Retro Typewriter Flexible Keyboard, 2.4GHz Connection and Optical
            Mouse',
            'description' => 'Brand UBOTIE
            Color Orange | Rainbow
            Connectivity
            Technology
            
            Radio Frequency
            
            Compatible
            Devices
            
            Projector, Laptop, Gaming Console,
            Television, Personal Computer
            
            Operating
            System
            
            Chrome OS
            
            Batteries
            Required?
            No
            Number of
            Keys
            
            100
            
            Power
            Source
            About this item
            • 💃【GORGEOUS COLOR DESIGN & NEVER FADE OFF】This rainbow colors
            design keyboard will help you to enjoy your typing better and it could also help to to be
            distinctive in your office or dormitory. Also you will not worry the color will faded
            anymore from this 2021 new arrival version.
            • 🎁【RETRO ROUND KEYCAPS】Clicky, Classical, Memories, TKL, what we design
            is to help your could type something at anywhere, anytime, meanwhile, we hope this
            cute typewriter design keyboard could bring you some good memories.
            • 🎈 【COMPATIBLE WITH WINDOWS & MAC OS & IOS & ANDROID】With this
            portable mini size bluetooth keyboards, you will find it is very convenient to type
            message or edict document by this portable keyboard on your cellphones or tablet pc.
            • 🎀 【STABLE USB CONNECTION TECHNOLOGY】2.4GHz dropout-free
            connection & 10m connecting rang & quickly re-connected &auto-sleep & energy
            saving. Please make sure that your device has a usb port or you just need a usb
            transfer.
            • 🌈【ANY REPLACEMENT&REFUND WILL BE RESPONDED IN 6Hrs】Any
            problems please let us know in time and there will be a brand new one shipped to you.',
            'regular_price' => 600,
            'category_id' => 1,
            'user_id' => 1,
            'quantity' => 122,
            'image' => '2-1.jpg'
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'WD_BLACK 4TB SN850X NVMe Internal Gaming SSD',
            'slug' => 'WD_BLACK-4TB-SN850X-NVMe-Internal-Gaming-SSD',
            'short_description' => 'WD_BLACK 4TB SN850X NVMe Internal Gaming SSD
            Solid State Drive - Gen4 PCIe, M.2 2280, Up to 7,300
            MB/s - WDS400T2X0E',
            'description' => 'Digital
            Storage
            Capacity
            
            4000 GB
            
            Hard Disk
            Interface
            
            NVMe
            Connectivity
            Technology
            PCle
            Brand WD_BLACK
            Special
            Feature
            
            Game Mode 2.0
            
            Hard Disk
            Description
            
            Solid State Drive
            
            Compatible
            Devices
            
            Computer
            
            Installation
            Type
            
            Dashboard Mount
            
            Color Black
            Hard Disk
            Size 4TB
            About this item
            • Get the ultimate gaming edge over your competition with insane speeds up to 7,300
            MB/s(1) for top-level performance and radically short load times.
            • A range of capacities from 1TB to 4TB(2) means you get to keep more of today’s
            games that can take up 200GB(2) or more of storage.
            • The WD_BLACK Dashboard monitors your drive’s health, controls your RGB style and
            can automatically detect games to turn on Game Mode 2.0 (Windows only).
            • Predictive Loading, Overhead Balancing, and Adaptive Thermal Management features
            come to the SN850X to juice up your gaming performance.(3)
            • Supports future games developed for Microsoft’s DirectStorage technology for faster
            load times.
            • (1) Based on read speed. 1 MB/s = 1 million bytes per second. Based on internal
            testing; performance may vary depending upon host device, usage conditions, drive
            capacity, and other factors.
            • (2) 1GB = 1 billion bytes and 1TB = 1 trillion bytes. Actual user capacity may be less
            depending on operating environment.
            • (3) Requires the WD_BLACK Dashboard (Windows only)',
            'regular_price' => 350,
            'category_id' => 1,
            'user_id' => 1,
            'quantity' => 26,
            'image' => '3-1.jpg'
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'SAMSUNG UJ59 Series 32-Inch 4K UHD',
            'slug' => 'SAMSUNG-UJ59-Series-32-Inch-4K-UHD',
            'short_description' => 'SAMSUNG UJ59 Series 32-Inch 4K UHD (3840x2160)
            Computer Monitor, HDMI, Display Port, Eye
            Saver/Flicker Free Mode, FreeSync
            (LU32J590UQNXZA)',
            'description' => 'Screen Size 31.5 Inches
            Display
            Resolution
            Maximum
            
            3840 x 2160
            Pixels
            Brand SAMSUNG
            Special
            Feature
            
            Flicker Free
            
            Refresh
            Rate
            
            60 Hz
            Connectivity
            Technology
            HDMI
            
            Aspect
            Ratio
            
            16:9
            Display
            Type
            
            LED
            Product
            Dimensions
            
            9.9"D x 28.72"W
            x 21.04"H
            
            Specific
            Uses For
            Product
            
            gaming
            
            About this item
            • WIDESCREEN UHD: With 4x the pixels of Full HD, get more screen space (vs 16:9
            screen) and UHD images; View documents & webpages w/ less scrolling, work more
            comfortably w/ multiple windows & toolbars, and enjoy photos, videos & games in
            stunning 4K
            • A BILLION COLOR SHADES: Supporting a billion shades of color, the UJ59 delivers
            incredibly vivid and realistic images; Its color accuracy means colors appear true to
            life, making the UJ59 ideal for photo, video and graphics applications
            • SEAMLESS UPSCALING: Samsung’s UHD upscaling technology includes signal
            analysis and detail enhancement that seamlessly upconverts SD, HD and Full HD
            content to near UHD-level picture quality
            • WIDESCREEN 4K GAMING: With 8.3 million pixels supporting a wide range of colors
            and resolving every image with astonishing clarity, UHD gives you a wider view for a
            truly thrilling and immersive gaming experience
            • SMOOTHER GAMEPLAY: AMD FreeSync synchronizes the refresh rate of your
            graphics card & monitor to reduce image tear & stutter; Low Input Lag Mode
            minimizes the delay between mouse, keyboard or joystick input and onscreen
            response for smooth gaming',
            'regular_price' => 340,
            'category_id' => 1,
            'user_id' => 1,
            'quantity' => 255,
            'image' => '5-1.jpg'
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'MSI Gaming GeForce RTX 4070 Ti 12GB',
            'slug' => 'MSI-Gaming-GeForce-RTX-4070-Ti-12GB',
            'short_description' => 'MSI Gaming GeForce RTX 4070 Ti 12GB GDRR6X
            192-Bit HDMI/DP Nvlink Tri-Frozr 3 Ada Lovelace
            Architecture Graphics Card (RTX 4070 Ti Gaming X Trio
            12G)',
            'description' => 'Graphics
            Coprocessor
            
            NVIDIA GeForce
            RTX 4070 Ti
            Brand MSI
            Graphics
            Ram Size
            
            12 GB
            
            Video
            Output
            Interface
            
            HDMI
            
            Chipset
            Brand
            
            NVIDIA
            
            Graphics
            RAM Type
            
            GDDR6X
            
            Included
            Components
            
            Graphics card;
            quick setup
            guide
            
            Compatible
            Devices
            
            Desktop
            
            Display
            Resolution
            Maximum
            
            7680 x 4320
            
            Graphics
            Card
            Interface
            
            PCI-Express x16
            
            About this item
            • Chipset: GeForce RTX 4070 Ti
            • Video Memory: 12GB GDDR6X
            • Memory Interface: 192-bit
            • Output: DisplayPort x 3 (v1.4a) / HDMI 2.1 x 1
            • Digital maximum resolution: 7680 x 4320',
            'regular_price' => 800,
            'category_id' => 1,
            'user_id' => 1,
            'quantity' => 21,
            'image' => '6-1.jpg'
        ]);
        \App\Models\Product::factory()->create([
            'name' => 'Expert Mobile App Developer',
            'slug' => 'expert-mobile-app-developer',
            'short_description' => 'I am expert mobile app Developer (Android mobile app, iOS mobile app or
            Hybrid mobile App) for your mobile app development (Android app developer,
            IOS mobile app, iphone app) requirements.',
            'description' => 'I am expert mobile app Developer (Android mobile app, iOS mobile app or
            Hybrid mobile App) for your mobile app development (Android app developer,
            IOS mobile app, iphone app) requirements. I can develop android and ios app
            with high standards with great quality in mobile app development.
            I can be your mobile app developer (android app developer and ios app). I can build
            the mobile app in native and hybrid technology with admin panel.
            
            Professional Cross-Platform Mobile App development services
            • Requirement Understanding Document
            • Design (UX & UI)
            • Development with modern standards
            • Deployment to Stores
            • Maintenance of servers
            Expertise:
            • Design mobile app
            • Android mobile App Development
            • ios mobile app Development
            • iphone mobile app Development
            • Mobile App Development
            • Hybrid mobile App Development
            • Mobile app developer for all yours mobile app needs.',
            'regular_price' => 600,
            'category_id' => 2,
            'user_id' => 2,
            'quantity' => 1,
            'image' => '4-1.jpg'
        ]);
        \App\Models\HomeSlider::factory(2)->create();

        $this->call(IndoRegionProvinceSeeder::class);
        $this->call(IndoRegionRegencySeeder::class);
    }
}
