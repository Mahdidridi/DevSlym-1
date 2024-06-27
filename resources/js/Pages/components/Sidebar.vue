<template>
    <div class="sidebar shadow-md bg-white p-4 rounded-xl flex flex-col">
        <div class="  flex justify-between items-start flex-col">
            <div class="py-5 flex justify-between items-center w-full">
                <h2 id="sidebar-title">DM Setting</h2>
                <div class="w-12 h-12 bg-white rounded-xl flex justify-center items-center border">X</div>
            </div>
            <div class="bg-gray-100 rounded-xl flex justify-between my-7 h-12 items-center w-full py-3 px-4">
                <div class="flex justify-between items-center">
                    <img width="23" class="mt-2" src="../../../assets/Group 1073714856.png" alt="">
                    <button class="text-md font-bold text-blue-500 flex items-center " @click="$emit('toggle-view') ">
                        DM Tour Guide
                    </button>

                </div>
                <img src="../../../assets/Group 1073715441.png" alt="">
            </div>
        </div>
        <nav class="flex justify-between w-full items-start flex-col">
            <h3 id="manage-inbox-title" class="mb-2">MANAGE BOX</h3>

            <ul>
                <li class=" py-3 h-12" ><a href="#" class="flex items-center text-black-500 ">
                        <img src="../../../assets/inbox-01.png" alt="">
                        <span class="mx-4">
                            Inbox 
                        </span>
                        </a></li>
                <li class="py-3 h-12"><a href="#" class="flex items-center text-black-500">
                        <img src="../../../assets/Group 1073715282.png" alt="">
                       <span class="mx-4">
                        Discussion Rules
                       </span> 
                        </a></li>
                <li class=" py-3  h-12"><a href="#" class="flex items-center text-black-500">
                        <img src="../../../assets/adressBook.png" alt="">
                       <span class="mx-4">
                        Address Book
                       </span></a></li>
                <li class=" py-3 h-12">
                    <a href="#" class="flex items-center text-black-500">
                        <img src="../../../assets/Vector(1).png" alt="">
                        <span class="mx-4">Zapier</span>
                         
                    </a></li>


            </ul>
            <div class="mt-8 w-full flex flex-col justify-between">
                <h3 id="manage-inbox-title" class="mb-2">ADVANCED MESSAGES</h3>
                <ul class="py-4 ">
                    <li class="mb-2 py-4 text-gray-400 flex justify-between itmes-center">
                            <span id="advanced-msg-text">
                                <img src="../../../assets/boostDM.png" alt="">   
                                <span style="margin-left:8px ;">
                                    Boost DM<sup>&#9415;</sup>
                                </span> 
                           
                            </span>
                            <span id="advanced-msg-title">Coming Soon..</span>
                    </li>
                    <li class="mb-2 py-4 text-gray-400 flex justify-between itmes-center">
                            <span id="advanced-msg-text">
                                <img src="../../../assets/BlurredDM.png" alt="">   
                               <span style="margin-left:8px ;">Blurred DM<sup>&#9415;</sup></span> 
                                
                            </span>
                            <span id="advanced-msg-title">Coming Soon..</span>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    name: 'Sidebar',
    props: ['isMobile']


}
</script>

<style scoped>
a{  
    font-size: 14px;
    font-weight:700;
    line-height: 20px;
    color:#25213e;
    }

.sidebar{
    min-height: 100%;
}
.sidebar a:hover {
    text-decoration: underline;
}
#sidebar-title{
    font-size: 16px;
    font-weight: 700;
    line-height: 24px;
    color: #514f5f;
    text-align: center;
}
#manage-inbox-title{
    font-size: 10px;
    font-weight: 700;
    line-height: 18px;
    color: #a7a7a5;
    letter-spacing: 1px;
}

#advanced-msg-title{
    font-size: 10px;
    font-weight: 600;
    line-height: 20px;
    color: #a7a7a5;
    letter-spacing: 1px;
   
}
#advanced-msg-text{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 12px;
    font-weight: 700;
    line-height: 20px;
    color: #a7a7a5;
    letter-spacing: 0px;
}
</style>