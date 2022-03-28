<?php include('views/layout/head.inc.php'); ?>

                <div class='w-[calc(100vw-12rem)] p-20'>
                    <div class='flex flex-col border-t-4 border-indigo-500 rounded'>
                        <div class='border-b border-x border-gray-200 bg-gray-100 p-3 h-16'>
                            <h2 class='text-2xl text-indigo-400 px-2'>Contacts</h2>
                        </div>
                        <?php foreach ($data as $onedata){ ?>
                            <a class='relative'>
                                <ul  @click='contacts.list.msg_<?= $onedata["contacts_ID"] ?> = !contacts.list.msg_<?= $onedata["contacts_ID"] ?>' class='hover:cursor-pointer p-3 h-16 flex w-full border-b border-x border-gray-200'>
                                    <li class='text-ellipsis truncate w-1/4 border-r border-gray-200 px-2 my-auto' id='CONTACT-<?= $onedata["contacts_ID"] ?>'><?= $onedata["contact_name"] ?></h2>
                                    <li class='text-ellipsis truncate w-1/4 border-r border-gray-200 px-2 my-auto text-xs text-gray-400'><?= $onedata["contact_email"] ?></li>
                                    <li class='text-ellipsis truncate w-1/4 border-r border-gray-200 px-2 my-auto text-xs text-gray-400'><?= $onedata["contact_phone"] ?></li>
                                    <svg  v-if='contacts.list.msg_<?= $onedata["contacts_ID"] ?>' class='fill-gray-400 w-4 h-4 ml-auto my-auto' viewBox="0 0 381.68 226.7"><path d="M377.06,24.69l-20.07-20.07c-2.98-2.98-6.95-4.62-11.16-4.62s-8.18,1.64-11.16,4.62L192.1,147.18c-.43,.43-.93,.52-1.26,.52s-.83-.09-1.26-.52L47.02,4.62c-2.98-2.98-6.95-4.62-11.16-4.62s-8.18,1.64-11.16,4.62L4.62,24.69C1.64,27.68,0,31.64,0,35.86c0,4.22,1.64,8.18,4.62,11.16L179.68,222.07c2.98,2.98,6.95,4.62,11.16,4.62s8.18-1.64,11.16-4.62L377.06,47.02c6.16-6.16,6.16-16.17,0-22.33Z"/></svg>
                                    <svg v-else class='rotate-[-90deg] fill-gray-400 w-4 h-4 ml-auto my-auto' viewBox="0 0 381.68 226.7"><path d="M377.06,24.69l-20.07-20.07c-2.98-2.98-6.95-4.62-11.16-4.62s-8.18,1.64-11.16,4.62L192.1,147.18c-.43,.43-.93,.52-1.26,.52s-.83-.09-1.26-.52L47.02,4.62c-2.98-2.98-6.95-4.62-11.16-4.62s-8.18,1.64-11.16,4.62L4.62,24.69C1.64,27.68,0,31.64,0,35.86c0,4.22,1.64,8.18,4.62,11.16L179.68,222.07c2.98,2.98,6.95,4.62,11.16,4.62s8.18-1.64,11.16-4.62L377.06,47.02c6.16-6.16,6.16-16.17,0-22.33Z"/></svg>
                                </ul>

                                <li class="flex h-3 w-3 absolute right-[-5px] top-[-5px]">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-emerald-500"></span>
                                </li>

                                <div v-if='contacts.list.msg_<?= $onedata["contacts_ID"] ?>' class='hover:cursor-default p-3 flex w-full border-b border-x border-gray-200'>
                                    <span class='text-sm '><?= $onedata["contact_message"] ?></span>
                                </div>
                               
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

<?php include('views/layout/footer.inc.php'); ?>
