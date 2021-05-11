<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl ph-4 py-2 border-none">
                <option value="One">One</option>
                <option value="Two">Two</option>
                <option value="Three">Three</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl ph-4 py-2 border-none">
                <option value="One">One</option>
                <option value="Two">Two</option>
                <option value="Three">Three</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" placeholder="find an idea" class="w-full rounded-xl bg-white border-none px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray border-gray font-bold text-xs uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur dignissimos illo nisi reprehenderit sed? A animi asperiores atque blanditiis consequatur cupiditate deleniti dignissimos eius enim eos eveniet excepturi facere harum iure minima nam necessitatibus neque nesciunt officiis omnis placeat provident quaerat quisquam quod saepe ullam, vero. Alias dolorem doloremque illum quis. At culpa excepturi id in laudantium minus, quisquam sequi sit sunt? Ipsa natus necessitatibus obcaecati quos tenetur. Accusamus accusantium, aspernatur assumenda autem distinctio ea earum eius error et eveniet fuga fugiat harum hic itaque iure iusto natus nihil nisi numquam odit, pariatur quis quod reiciendis sequi soluta tenetur ullam voluptatem. Aliquam delectus ea exercitationem ipsa, quaerat quo sit temporibus totam. Dolores facilis impedit ipsa perferendis placeat qui ullam. Beatae culpa cum dolorem, eligendi numquam placeat quibusdam. Aut eaque fugiat reiciendis voluptatibus voluptatum! Beatae commodi cum, dolor dolore dolorem dolores facilis hic illum ipsum laboriosam, laudantium modi nemo, nostrum quaerat sequi? Animi assumenda autem, consectetur consequatur culpa debitis doloremque eius et facere facilis hic impedit iusto maxime, molestias nobis non pariatur provident quae qui quod rem repellendus saepe sapiente velit voluptate? A animi dicta distinctio fuga fugiat fugit iste laudantium minus molestias necessitatibus nulla odio omnis provident, repellat sit.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="font-bold text-xs uppercase bg-gray w-28 text-center rounded-2xl text-white h-7 py-2 px-4">Open</div>
                            <button class="bg-gray-100 h-7 py-1 px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold block bg-white shadow-lg py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl text-blue">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-blue border-gray font-bold text-xs text-white uppercase rounded-xl px-4 py-3">
                        Voted
                    </button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur dignissimos illo nisi reprehenderit sed? A animi asperiores atque blanditiis consequatur cupiditate deleniti dignissimos eius enim eos eveniet excepturi facere harum iure minima nam necessitatibus neque nesciunt officiis omnis placeat provident quaerat quisquam quod saepe ullam, vero. Alias dolorem doloremque illum quis. At culpa excepturi id in laudantium minus, quisquam sequi sit sunt? Ipsa natus necessitatibus obcaecati quos tenetur. Accusamus accusantium, aspernatur assumenda autem distinctio ea earum eius error et eveniet fuga fugiat harum hic itaque iure iusto natus nihil nisi numquam odit, pariatur quis quod reiciendis sequi soluta tenetur ullam voluptatem. Aliquam delectus ea exercitationem ipsa, quaerat quo sit temporibus totam. Dolores facilis impedit ipsa perferendis placeat qui ullam. Beatae culpa cum dolorem, eligendi numquam placeat quibusdam. Aut eaque fugiat reiciendis voluptatibus voluptatum! Beatae commodi cum, dolor dolore dolorem dolores facilis hic illum ipsum laboriosam, laudantium modi nemo, nostrum quaerat sequi? Animi assumenda autem, consectetur consequatur culpa debitis doloremque eius et facere facilis hic impedit iusto maxime, molestias nobis non pariatur provident quae qui quod rem repellendus saepe sapiente velit voluptate? A animi dicta distinctio fuga fugiat fugit iste laudantium minus molestias necessitatibus nulla odio omnis provident, repellat sit.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="font-bold text-xs uppercase bg-yellow w-28 text-center rounded-2xl text-white h-7 py-2 px-4">In progress</div>
                            <button class="bg-gray-100 h-7 py-1 px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold block bg-white shadow-lg py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="idea-container bg-white rounded-xl flex">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray border-gray font-bold text-xs uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>

            <div class="flex px-2 py-6">
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="" class="hover:underline">A random title</a>
                    </h4>
                    <div class="text-gray-600 mt-3 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur dignissimos illo nisi reprehenderit sed? A animi asperiores atque blanditiis consequatur cupiditate deleniti dignissimos eius enim eos eveniet excepturi facere harum iure minima nam necessitatibus neque nesciunt officiis omnis placeat provident quaerat quisquam quod saepe ullam, vero. Alias dolorem doloremque illum quis. At culpa excepturi id in laudantium minus, quisquam sequi sit sunt? Ipsa natus necessitatibus obcaecati quos tenetur. Accusamus accusantium, aspernatur assumenda autem distinctio ea earum eius error et eveniet fuga fugiat harum hic itaque iure iusto natus nihil nisi numquam odit, pariatur quis quod reiciendis sequi soluta tenetur ullam voluptatem. Aliquam delectus ea exercitationem ipsa, quaerat quo sit temporibus totam. Dolores facilis impedit ipsa perferendis placeat qui ullam. Beatae culpa cum dolorem, eligendi numquam placeat quibusdam. Aut eaque fugiat reiciendis voluptatibus voluptatum! Beatae commodi cum, dolor dolore dolorem dolores facilis hic illum ipsum laboriosam, laudantium modi nemo, nostrum quaerat sequi? Animi assumenda autem, consectetur consequatur culpa debitis doloremque eius et facere facilis hic impedit iusto maxime, molestias nobis non pariatur provident quae qui quod rem repellendus saepe sapiente velit voluptate? A animi dicta distinctio fuga fugiat fugit iste laudantium minus molestias necessitatibus nulla odio omnis provident, repellat sit.
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="font-bold text-xs uppercase bg-red w-28 text-center rounded-2xl text-white h-7 py-2 px-4">Closed</div>
                            <button class="bg-gray-100 h-7 py-1 px-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold block bg-white shadow-lg py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block px-5 py-3">Delete post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
