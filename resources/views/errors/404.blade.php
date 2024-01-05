<!doctype html>
<html>

   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>KenaliKonten.com - Platform Keaslian Berita Terkini</title> <!-- Added title for SEO -->
    
    <!-- Google Font Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://www.kenalikonten.com/images/favicon.ico" type="image/x-icon">
    
    <!-- Meta Description for SEO -->
    <meta name="description" content="KenaliKonten.com adalah Platform untuk mengetahui keaslian berita terkini.">
    
    <!-- Google Font Link -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com/3.3.5"></script>
    
    <!-- Open Graph Tags for Social Media Sharing -->
    <meta property="og:title" content="KenaliKonten.com - Platform Keaslian Berita Terkini">
    <meta property="og:description" content="KenaliKonten.com adalah Platform untuk mengetahui keaslian berita terkini.">
    <meta property="og:url" content="https://www.kenalikonten.com"> <!-- Replace with your actual URL -->
    <meta property="og:image" content="https://www.kenalikonten.com/images/logo-main.png"> <!-- Replace with your actual image URL -->
    <meta property="og:type" content="website">
    
    <!-- Twitter Card Tags for Social Media Sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="KenaliKonten.com - Platform Keaslian Berita Terkini">
    <meta name="twitter:description" content="KenaliKonten.com adalah Platform untuk mengetahui keaslian berita terkini.">
    <meta name="twitter:image" content="https://www.kenalikonten.com/images/logo-main.png"> <!-- Replace with your actual image URL -->
    
    <!-- Canonical Tag for Preventing Duplicate Content -->
    <link rel="canonical" href="https://www.kenalikonten.com"> <!-- Replace with your actual URL -->

        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <style>
            /* Tambahkan gaya untuk preloader */
            #preloader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: #fff;
                /* Ganti dengan warna latar belakang yang diinginkan */
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 1000;
            }

            /* Animasi loading */
            #loading {
                border: 2px solid #f3f3f3;
                border-top: 4px solid #FF7366;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                0% {
                    transform: rotate(0deg);
                }

                100% {
                    transform: rotate(360deg);
                }
            }

            #preloader img {
                width: 120px;
                /* Sesuaikan ukuran gambar preloader */
                height: auto;
            }

        </style>
    </head>

    <body class="font-[poppins]  bg-neutral-100 flex flex-row">
        <div id="particles-js" class="fixed inset-0 h-screen w-screen"></div>

        <!-- Tambahkan preloader -->
        <div id="preloader" class="flex flex-col gap-y-8 h-[100vh]">
            <!-- Gunakan gambar "./dist/images/logo-main.png" sebagai bagian dari preloader -->
            <img src="https://www.kenalikonten.com/images/logo-main.png" />
            <div id="loading"></div>
        </div>

        <main class="flex flex-col items-center justify-center  mx-auto h-screen">

            <section id="main" class="mx-auto">
                <div class="w-full text-center">
                    <img class="w-[350px]" src="https://www.kenalikonten.com/images/logo-main.png" />
                </div>
            </section>
                    <p class="text-red-400 text-2xl font-bold text-center max-md:text-xl my-3">Halaman tidak di Temukan</p>

            <section id="text" class="flex flex-col mb-10">
                <div class="text-center text-zinc-800 text-base font-normal font-['Poppins']">Cek
                    hoaks atau fakta konten yang kamu baca<br />pakai <a class="relative z-1000 text-red-500" href="{{route('index.home')}}"> Kenali Konten</a></div>
            </section>

   
            <section id="text" class="flex flex-row mt-5 mb-10 relative z-1000">
               
                <svg width="201" height="40" viewBox="0 0 201 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                     <a href="https://instagram.com/kenalikonten" target="_blank">
                        <rect x="0.5" width="40" height="40" fill="url(#pattern0)"/>
                    </a>
                    <a href="mailto:info@kenalikonten.com"  target="_blank">
                        <rect x="80.5" width="40" height="40" fill="url(#pattern1)"/>
                    </a>
                    <a href="https://wa.me/6285782756006" target="_blank">
                        <rect x="160.5" width="40" height="40" fill="url(#pattern2)"/>
                    </a>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_698_216" transform="scale(0.0078125)"/>
                    </pattern>
                    <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image1_698_216" transform="scale(0.0078125)"/>
                    </pattern>
                    <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image2_698_216" transform="scale(0.0078125)"/>
                    </pattern>
                    <image id="image0_698_216" width="128" height="128" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAADdgAAA3YBfdWCzAAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAABmPSURBVHic7Z15fFTVvcC/595ZsgzZE8AICighgIpYQVErShUVxL1Yn22tXZ5bN1urvvpqbfWhrU9f3fpen7W0VSvPHVFxqUsrKqiIiElQwQXZsieEJLPd8/64M5OZycw9d5KZyUTn9/ncT5LJ+Z3t951zfvec37lXSCnJpgghpgP1QK1Hd04ucbjqg1LWeo1gda8RKPMZQVdWK5RlcQqnz625O13C1aIJbfve4N7GPqNvK7AdaJRSNmSzPiLTAAghdGAecDpwGjAlowWOftkCPA48BrwqpQxmsrCMACCEcAKnYBp9MVCV9kK+GNIKrMKE4SkppT/tJUgp03YBAjgX+BCQ+Sut14ehvhVptVkajb8AeDMHOurzfr0JLMgZAIBZwOoc6Jgv2rUamDViAAAasAwwcqAzvqiXEbKBllUAAA+mpzrSHZC/zOtxwDMUW6Z8FyCE2B9YCRyUkmKUTCsu4aiyasa7C6lxFVLjDP10FVGoO5FSIBFINCQCov+O/B66pAaR32P1pBQD/4vXlaG8E+nGlKFFlR+rO1CGFrKEQlcK+gw/7f4u2gNdtPu76Ah00+Zv592eBrZ5PxtqlwK8CyyRUn6cilJKAAghjgEeBqpTKUQXgjml5SysHMuJleOYWFCcwCDhjkxszM8TBJJEuoLd3lbe2LOet/asZ3Pv+xgYqXQzQAtwlpTyn3YVbAMghPgasBywvVJXqOtctO9+fK92P8qc7jhDJjJIHoKw3p7gXp5ue4an2p/GZ3jtdjmAD7hASvk3W3a1A0Dom/88No2vC8F548Zz5aTJ1LgKBjU6D4E9CCSCjkAXDzc/wsudL6UyIviAr9gZCZQAhOb8ddgc9k+orOBXB0xhalFxwkbmIUgdAolge/9O7m++j3d6NtgxA5jTwRyVT2AJgBDCA7yKDYdPE3DN5P358cQJkUqTpJF5CIYGgZQaT7St5MHmFUhsTd3vAvOklD0pAyCE0IBHgSWqUjy6zj0zDmRhVcWgBuchSD8Eb/e8zV3b76Df6LMDwUrgDCllwvnDCoBlwFWq3CcVunnwkDrqiouSdlYegvRDsN27nVs+u5lm3247ENwopbzaNgBCiFnAeszNneTGL3Lz8pzpVDicA43JQ5A1CHqCe7n242vsQCCB2VLKQQ6ElkThRpXxPQ6dBw89gAqXA4QEEapa+CdG1O9m882/jYFmRP2NiG5erK4Q5qpnrF4i3Tg9JEKYK9WJ9Mx8k5VpDNTbol0CI67uA7qxdUetm6B/iKprfBkevZjL9/0pBVqhCgARsukgGQSAEGIBsNAqN03A8kMmM21MYcj45CEYIQhq3bVcUnsZwvr7CrAwZNvkAAghBHCTKqdr62o5eVwJwmxRHoIRhuBQz6GcU7NUZTaAm0I2jogjLsFS4DCrHBaOLeWnB441ZxVNIgyze8wPROinycLAnwYILfwvM6UApEGEwai/pQjpM1gXAVIaiBi9ULoY3Tg9AGEgpWZ+V+L0zHzD8158mQZILdLCZO0CAym0qLoP6A6uu6lbNKGM8ScdSEl9DSX11SChq7GVrsZWPnt6Kz2f9gzWHejmSBmnVi5hc2+Tap3gMEwbPxBRDTuBoTCuRixi9nQheOP4adQVF4b2oYT50xDIyN6UiPoZ4jTvGA52DIXGxHNnMeXSI9Hd8d9DU4LeAE13vMWW+xsH8lcsFl299UrViuEWoF6Gwsuip4BTrIwP8I39KqgrKQAtesjHHAny04H96UCTzLp1MVMvPyap8QF0t4MZP5nL3N8tGMjfYjqoLRjPsWXzrUxIyManhP+IBuB0K60iXeOaGeNCxiUPwTAgmHjuoVQdNUllqIiMPXoCU86rT9zuuDLOqjkTl+ZWZRmxtQaEQ7cXW2n8sK6acYXOKOPmIRgKBEX7lTLlkqNsGz8s0y47DM9EjxKCckcpp1SerMpuccjmkRFgHhah27oQXFpXZRYaY9w8BKlCMG5hPZrFsJ/UBm4H+548eVD/JILg5IqFaEmXeCBk63nRAFgO//Oqi6hw66aznIdgWBB4ptWkbPywlNZX2bpFHKMXU1c0VZXd6TAAwGlWKRfvWzJgxDwEw4JgzLRxQ7E9EAIgSf/EQ3DYmNmq7E4D0EJn9Sy9/8UTSmKNmIdg6BAMRwQk6o9EEByuBmCKEGK6hnlQM6nMKC9g0hjXYCPmIRgSBD1NO4ds/+7Glth2W0Aw1l3FBPe+qizrNaDWKsVx44ujjEoegmFCsLdp11DtT3djM6ksGx/kma7KslYrcWmTrVJMKHbGGZU8BMOAoOXZdzG8qZ/xDHoD7Fz9QSQvOxBUOiss8yzUCic7ytx6fbcv+dw0rsiBEBKJMI1qhPcSZMiaEjSBMEJpIp8TlT702QjsHYiiAlyzZuLYZxxaZTl6ZQVaZRl6VTl6ZbnZuW2dBFo7CbZ14W/pJNDWhW9HK73r3yfY6yedewfebW18+vuX2P9HJ1gaJ1623Pkafds6GNj1i9t3SNA/5Y4SyzyL9eJ6R1BKyylgfLEj4nyMFgi0yjJc8+bgPuJwXLNnIpxOy47QisbhnDDYO5f+AHvfaqJnzSZ61ryLv7U7LRDs/L+1lM6ZRPm8AyzrFZbWNR/x6QMbQvlYbD7F9U+Fs9QyX0MataKyQN/d1h9MenO68ZwDOHCMK7LJI6M2gEIjXewGkBGVRkalMeI+S/MGEgWFuE9dhHv+0TgOnBKiJY0iJf2bt9H94nraH3mFYL+fYW0gCZ3xX53LxIvno7kTA2p4A2y5aw2fPvA20hCkGlm0w9vMDz64JmmTPLqnWbh14fUGZdJ4/5YL6vA49NAR0ByEQNNxLTyRwm+cj6i0nvPSJYG2bprvfpLOp9ZhGAwdAjTcEyqpOnEmnmnj8UwbD8Cepl3sadzN7meb6P2kKxb0FCDoM/yc3/D9pO1wCqdvYPxNIn3fq48xbC5B4Jh7JO7vfBtt4sShW3MY4v14F7v/+wm61zQMC4JMxhietekiyzaoF6UjI6k5z2OYs9pI+gSipoaCK65CP/hgtZUyKO79xzHxxu+yd8OHfHb9/fh2d45IUElSXRuzoOWOgZlJ3O2fNvBZ5PYvi7eIjpkzKbr9rhE3frQUzzqAKXdfjufgSWnfO4jXjb7NM7vMWlclagCiDD7SEDgWnoz7ppsRZWWp2ijj4ijzsP9/XUzFojk5BYGy3soUInboNyXL04Gm4fj2pehn2Ap8HCTS68O//h387zURbG037/tb2jHaOpEIREU5elWVuU5QXYlr5lQKZs9AuFN7ZKFwOqi96lzck8ax665VGEE54tOBSpQACAGSEYRA03H+2w2II45RNiZajO5uAq+txbvmdfxvb8To98U5VwMOlNHbR2DbTqJjDHEX4D5sJkVHHUbhvEPRSz22y65aOh93bRWf/Hz5iEOgElsjQNi8IwGBfuGlKRlf9vfje+ghvA8+gtHXb5YlBSLFaGPp7ad/zVv0rVmPKCxizNKTKV16ElqBMtwKgDFHz2TcJYvZecfKEXYMrcXmXcDIQKAffyr66efaa4lh4F/9NL6//gWjvSNi9EgbhhFyLvt66Vr+KD0rX6TsgjMYs+gY0NTDa9XS+Xg/2kX7k+tyFgIbTuCAQyYSOIGZcgzF9EPQL75C3QKA9jb6f3QZvt/dgmxvg4hzld4NpGB7J623LGfHJTcQbOu0VbV9fnL2iN4dKM2rTBFvmGxAUDMO/WfLwGG9hg9gbG7E+/3vIt9vyNouonfzVnZ871d4Gz9Sd5/TwYQbvoVrbNmIQKASewBkGQLH93+BKC1XVs148VkCP7sM2lsTdlYmIQi0d7DzhzfS8/zryno6yjzse815UflmDwKVpLYQlAUItC8djZiuDGfCeOlZAjdfB36vZWdlEgLp99Fy/R9sQVA86wBKjpqedQhUYnMEyBIEuoZ23mXKKsn3Gwjc/h9R+Vh3ViYhQEhaf/MnW9PB2ItORdPIMgTWksIIkHkI9PmnImonWdeno5XgsqvA74ur28hBIP0+mq+5XekYuvcfR9kpcwbqkAUIVKIEQMQYNoMQFLjRzv5X68oYBoFlP0N2ttjeO8imT7D757eDYT3s1nxnEXqBM2sQqMTWCJANCLSvnANl1u+VMP6+ErmlIaKfaxB4N29lz5PWj+ZzVJZQcebRMXqZhEAltn2ATEMg5ihi5Pr7MB78Q2z5OQhB5/JHMfqtn+xZctzsQXqZgkAlKfkAGYOgvBqxv+XxBIJP3ofsahvWVnI2IAi2d9K1YrVlWwrqJuCsKskKBCpJcTs4MxBos78MFjF8ck8Xxqp7E5aVixDsWfE0wa6kz2YEIfAcdVDCESTdENgxr1oyDcEhx1qXv/5l8PYmLSvXIJB9vfS9+rZlkzxHzSShIdMMgR3TKlLIgZSZgKCgCK3+cMsqGOtfHpgyRgkEvWvesmxT8WHT0IucZBwClXmVKcIdHU6dbgimfQkcFoEXPi+yYW1aI4uyAYH3rU1Iry95tzodFM2eSqbPIqrEvhOYIQi0mgmWxRsNa8HXH9EfLRDg7ad//XuWbXPtEz7unTkIVJLaUnAGIJClindKfvhObN6jCALfpvctm+aoLI0xZiYgUIk6JEyToVMp0uzNcOCGRlRgiERoAhn1t/mTmECPREElosz6iRmyozmUVVTeOXQMzSqoJNjSZtk2Z3VZ7Lc0E88xVIitiKCMQqAaAbpbItmMNgiMtg7LpumVpea3NPqLmnYIrMVeVDAiYxCoR4DdUbowmiAItrZats1RVYaI14P0QqAQ2zGBGYOgxPpNNKK7BSkYlRDIdtUIEJ4CMgiBQlI7GpYBCOyUL8ToOZoec4TNzhgsZEg3MxCoJLWIoNDvIoHHHcktxbsD9rRYl19WFYEgVjcu7xy8O9AqrU8wBds64nTjF3LScXdgLSnuBQz8ni4IZFezZfGiomagzFEGgaPa+rh6sLUjgW56IVDJ0I+GpWk6EN02RoCo/EzPYXRMB7piBDDaOon4ADG6aZwOFGLfCcwQBLJ7dyTHhMWXjUXGQThaINCrFCNAW3vUbeDIQGD7NjBjEKh8gCmzEkI4GiBwzphm2TQj4gOQOQgUYv9waIYgkO3brEeAurngLgBv/6DycxkCUVCIc/Yhln0b2LGLiKOWKQgUYms7OLKOH+Vspc0x/Oh1CCTfNcNZANOOiC1rGOcOImky7Bg6Dz3Y8ni59PvxbdiEKuR8uI6h0rzKFDGdkwEIfL3ILdYHK7SD5w8uK8chcB91hGWbfOs3QV9f0niCdEGgEpu7gWQWgqYXresw8zgoLBo1EGiFBTiOnGvZJO/rb8QYPXMQWEtqC0EZgkA2vWBOXMmqUFyGOP6bicvKQQjc55yJVmLxlE4p8b26ThlUkg4IVJJaPECmIOhphh3WwRPacRcgSitzHgKtohzX2WdbtiXwwRZkW9tgY2YAApXYiwnMAgRsetq6Hq5CxEmXJi8rRyBwff0biIICy6Z4X3olyniZhUBpXmWKRB2TAQjkuvuVawJi7hmI/WbmLAR6XR3Ok6xf2CTb2vE+8WSUITMLgUpSiwnMJASBPuQLtylqq6NdeBtaaXXOQaBVVlDwy1+jenRM31/uhf6+OENmDgKVKAEQ8UbLJAQbHoGWLdYVKqlGXPg7hMudOxC4nDh/cQNUVFpW3fj0U3zPPGu5gZRuCFRiawTIGgQyAM/drKwSEw9CW3rdQJkjDIHjR1ei1VkfbQPw3v1HhBGMMmY2ILAW29vB2YJAvv8CfLxOWS1mL0I7/8aRHQncThxXXIt23InK6gY3biSw9rWI4bIFgR3zWosg+xA8eiXsbVdWjdmL0C7904j4BFplFc5ld6HNVxtfdnbS/9sbGUpQyXAhUEkKTiDZg2DPDuSKyyBo4906Ew9CXL4iq3cH4sB6HLfcg5iqfCkTBPz4fn0tNO8OGSS7EKgktYWgbELw2VvIVdeqOxigpBrtB/eiffXajC4WiYoK9IuuwnHj3VCuCGcPif/2WzDeeyfpsnGmIVBJavEACMLbu5GoXgSDtlcxO9fcYo3ST3Ur+Z2HkTVTEUdeoO5pTUcceTbisEUYLy5HvvBn6OuNLWuoW8kFhWiLz0df9C9QUKiuS0iCj67AePZJzODXzBw+GdALpYvfSlZISmHhIwLB338DFROgboGyqgC4CtEWXow8+muw6SWMjS9C0+upxxO43Yjpc9Fnz4fZX0aMsX4BU7zI1/9J8I93hr6VDDu8bOgQWEtELZkE/lrBoNe8RF73Yv4uYz6LT2t+JuP1jbg04VfRJHilDJoOC35mbyRIJP5+5Oa1sGUDsnM3dLYi25uhs9Uss6QaUT7WXGMor4EDDkGbPhdc9h4MHS/Bxx4geM+dEDQYzouwwn8ne8p5OB2D9AZ069bcZ1lXNQD3ViQxbJYhADjkLMTi60BXP0J2RCTgJ/j73xJ8blWCvhoZCKauud+yyjZCwuKHyRH2Cdo+Riy9A4qz84YwuyK7Ogj+5mpkwzsIEfa/o/sqzp3K2nRgLbbuAgZ7zfGeO9m9O/jDWfYWi7IksmE9gau+hWzaENdO4voqgeee4bsDldg+GjbYYRrBkWDPDuTyryOmHg8n/BSqp9gwU/pFbv8I4/47MN58JforHKnrSB5Nj+gpxOF24vP6SRq92OM18Li1UH45BEF42fiDf8CsMxHH/wDGWB80TZt0tmI89D8EX3rCdPTEQLtG+kBqNAS9wYBlM1ya7nN4CkSn1y+TntHe0SWZOnbAMLkGAUYA1j+I3LgKMec8mHky7DNjwCjpEimRHzci1z2H8fyD0O9FSJBicLtyBYJmX69lk4o0R6ejwEULkBSAnZ1Bpo7XYgyTexBIM55gzR/hlXuQnhrEtONh2nGIKUdYP4TKSgI+jMY34J2XMdb/AzpaBrx6Ablw+MQKgmZfn2Xz3Jre4nDobAdmJEu0s0OGnDWR+xCE9EVPM3LdA7B2BdJVBJOOQFRMgDHViJKx5n1/ac3AlNHdguxshq5WZGczoqsVo3kbNL0J/b0Dr8AVsfUJ1zVXIWj2WwOgC7Hd0dFDI5B0S2tnpxFq0yiDIHwCydcLTS9EjCglMWsSkbWJqDWJmM9Ebp9AsoJANQJ0B3yNju5eudUq0bY2I7Z2oxECC8OM5CvxMg3BTq81AD1B/1YHsN0q0QsbA4M6Ng/B6IBgTafi4C1s14BGqxTvfmKwtTkYt2AjBy3g5NRiUVxds/bSC5vxBLHtjK9behaLPu3fS9PebhUAjZqUsgGwjMRcuS6QoHPyEOQyBM+27VIZf4uUsiG8FPy4JQBrA0k6Jw9BrkLwTNtuFQCPh7sI4DGrlK80BGnrSdY5eQhyDYJOv5d1XdaPqAvbPAzAq0DSpxoGDbjtCV+o0XkIch2C/93+CUGLw7YhW78aAUBKGQRWWWn856M+dnYYeQhyHIJmXz+//+wTK1MCrArZPGY72HIa6PXCL+/3RTU6D0EuQnDTR1vpCwZVAERsLWRoqBBCODFvCZPureoabLyziPp9tcSrZhbRPpHl1FyILIqrq4yve1RZkTRWZcWsIsbXfXBdpaKs2HbG1y15ZNHm3j6OXvemavjfAtRLKf0QNQKEPrjGSjNowBX3eGO/bfmRIGdGgl98uEVlfIBrwsaPASAkKwDLl9089UaQZQ/58hDkGAS3frqN59qUp6neCtk4IjEASHM+uFKVy7//2ceqNwN5CHIEgmda27l+68cqswFcKWXsECFkgiFDCLEaWGiV05hCwWu3FjB9Xz123o2a6/I+QeZ9gqaefua/8R49asfvGSnlSYNsnQSAWcB6TN6SypTxGq/fWkClR8tDMAIQtPsCHLu2gY/6rF9VG9KYLaXcEP+PeB/ATG0mvEmV65adBkf8uJ+Gz4L56SDL00HT3l6OXWfL+AA3JTI+JBkBAIQQGvAosESV+5hCwX1Xuln8JUd+JMjCSPD0rm4ueGcrPQHlsA+wEjhDSpnwkEBSAACEEB7MJcODVKVoAn79TRdXn+3KQ5BBCG7+YDfXbd5uhiio5V1gnpQy6YuMLQEAEELsD6wDbMVcn3K4zm8vdOcXi9IMwebufq7etINndnfZMQNACzBHSvmxVSIlAABCiGOA5yH5+YFo0TW48AQnvzzPxfhyLQ/BMCDY1efn+vd28ZdP2u0s8oTFB3xFSvlPVUJbAAAIIb4GLMcmBABFbrj8dBc/XOKi0pOsc/IQJIKg3RvkjqZWbnu/hd6g+oxflPiAC6SUf7OT2DYAEBkJHsbmdBAWXYOjp+ssmetgyRwHk2v0PAQJIPhoj49V27pZ9Vk3r7b0pvKND0sLcJadb35YUgIAIj7BSmw4hsnkoP00jj/YwYRKjfFlGuPLBePLdPYpFeYxtM8xBD0+g517g+zaG2Dn3gC7egNs2+vnxZ17ea+jf6hdCqbDt0Q15w8SKWXKF+DBDCmS+SsnrscBz5BsORSlEAQasIwQ3/lrRC4jZANtyHYcqmIUCLOA1TnQGV+0azUwa9j2G24GUSAsAN7MgY75vF9vAgvSZrd0ZRSCQADnAh/mQEd93q4PQ30r0mmzlO8C7EgovOwU4HRgMWDvqYp5iZdWzGDdx4CnZFQkT7okIwDEFCCEDszDhOE0LGIO8wKYMXuPYxr9VRmK3s2UZByAQQUKMR2oB2pLisTkcg/1gSC1/T6qe/plmdXjaj4P4taFz+PUOgscokUXYnunN9jY7TO2Yh7SbZTmUb2syf8DYtdmpkna+AcAAAAASUVORK5CYII="/>
                    <image id="image1_698_216" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                    <image id="image2_698_216" width="128" height="128" xlink:href="data:image/png;base64,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"/>
                    </defs>
                    </svg>
                    
            </section>

        </main>
        <script>
            // Tambahkan script untuk menghilangkan preloader setelah halaman selesai dimuat
            document.addEventListener("DOMContentLoaded", function () {
                // Hilangkan preloader
                document.getElementById("preloader").style.display = "none";
                // Tampilkan konten setelah halaman dimuat
                document.getElementById("content").style.display = "block";
            });
        </script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#FF7366"
            },
            "shape": {
                "type": "polygon",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 10
                },
                "image": {
                    "src": ['/images/teams/1.png','/images/teams/2.png','/images/teams/3.png'],
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                    "enable": true,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 5,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#FF7366",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 3,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 600,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 1
                },
                "repulse": {
                    "distance": 100,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 5
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>

    </body>

</html>
