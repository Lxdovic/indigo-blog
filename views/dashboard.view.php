<?php include('views/layout/head.inc.php'); ?>

                <div class='w-[calc(100vw-12rem)] flex flex-col gap-10 py-10'>
                    <div class='flex flex-row lg:flex-row flex-col px-10 gap-4 justify-between'>
                        <div class='flex gap-4 md:flex-row flex-col w-full lg:w-1/2'>
                            <div class='flex rounded bg-white h-24 w-full p-4 border-t-4 bg-gray-100 border-indigo-800'>
                                <div class='flex flex-col'>
                                    <h2 class='text-xl uppercase text-ellipsis overflow-hidden'>Earnings (Monthly)</h2>
                                    <span>$40,000</span>
                                </div>

                                <svg class="h-8 w-8 ml-auto mt-auto" fill="none" viewBox="0 0 24 24" stroke="rgb(232, 121, 249)" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/></svg>
                            </div>

                            <div class='flex rounded bg-white h-24 w-full p-4 border-t-4 bg-gray-100 border-indigo-600'>
                                <div class='flex flex-col'>
                                    <h2 class='text-xl uppercase text-ellipsis overflow-hidden'>Earnings (Annual)</h2>
                                    <span>$215,000</span>
                                </div>

                                <svg class="h-8 w-8 ml-auto mt-auto" fill="none" viewBox="0 0 24 24" stroke="rgb(232, 121, 249)" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/></svg>
                            </div>
                        </div>
                        <div class='flex gap-4 md:flex-row flex-col w-full lg:w-1/2'>
                            <div class='flex rounded bg-white h-24 w-full p-4 border-t-4 bg-gray-100 border-indigo-400'>
                                <div class='flex flex-col'>
                                    <h2 class='text-xl uppercase text-ellipsis overflow-hidden'>Tasks</h2>
                                    <span>50%</span>
                                </div>

                                <svg class="h-8 w-8 ml-auto mt-auto" fill="none" viewBox="0 0 24 24" stroke="rgb(232, 121, 249)" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/></svg>
                            </div>

                            <div class='flex rounded bg-white h-24 w-full p-4 border-t-4 bg-gray-100 border-indigo-200'>
                                <div class='flex flex-col'>
                                    <h2 class='text-xl uppercase text-ellipsis overflow-hidden'>Pending Requests</h2>
                                    <span>18</span>
                                </div>

                                <svg class="h-8 w-8 ml-auto mt-auto" fill="none" viewBox="0 0 24 24" stroke="rgb(232, 121, 249)" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class='px-10 flex gap-4 flex-col lg:flex-row lg:h-96 xl:h-[30rem] 2xl:h-[40rem]'>
                        <div class='lg:w-4/6 flex flex-col rounded bg-gradient-to-r from-indigo-800 to-indigo-400 pt-1 rounded'>
                            <div class='bg-white h-full border border-gray-300'>
                                <div class='w-full p-3 bg-slate-100'>
                                    <h2>Earnings Overview</h2>
                                </div>
                                <div class='px-10 sm:px-10 md:px-2 xl:px-10'>
                                    <canvas id='earningsOverview'></canvas>
                                </div>
                            </div>
                        </div>

                        <div class='lg:w-2/6 flex flex-col rounded bg-gradient-to-r from-indigo-400 to-indigo-200 pt-1 rounded'>
                            <div class='bg-white h-full border border-gray-300'>
                                <div class='w-full p-3 bg-slate-100'>
                                    <h2>Revenue Sources</h2>
                                </div>
                                <div class='px-10 sm:px-10 md:px-2 xl:px-10'>
                                    <canvas id='revenueSources'></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script defer src='scripts/dashboard.js'></script>

<?php include('views/layout/footer.inc.php'); ?>
