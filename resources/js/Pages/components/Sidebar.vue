<template>
    <div class="sidebar bg-white px-3 mb-4 rounded-xl flex flex-col">
        <div id="first-part-sidebar" class=" w-full  flex justify-between items-start flex-col">
            <div class="py-5 flex justify-between items-center w-full">
                <h2 id="sidebar-title">DM Setting</h2>
                <div id="close-btn" class="w-12 h-12 rounded-xl flex justify-center items-center">
                    <img src="../../../assets/plus.png" alt="">
                </div>
            </div>
            <div class="bg-gray-100 rounded-xl flex justify-between mt-3 mb-4 h-12 items-center w-full py-3 px-4">
                <div class="flex justify-between items-center">
                    <img width="30" class="mt-2" src="../../../assets/Group 1073714856.png" alt="">
                    <button id="blue-title" class="text-sm font-bold flex items-center" @click="$emit('toggle-view') ">
                        DM Tour Guide
                    </button>

                </div>
                <div class="w-fit h-fit bg-white rounded-full">
                    <img  src="../../../assets/Group 1073715441.png" alt="">

                </div>

            </div>
        </div>
        <nav class=" px-4 flex justify-between w-full items-start flex-col">
            <h3 id="manage-inbox-title" class="mb-2">MANAGE INBOX</h3>

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
            <div class="mt-5 w-full flex flex-col justify-between">
                <h3 id="manage-inbox-title" class="">ADVANCED MESSAGES</h3>
                <ul class="py-3 ">
                    <li class="mb-2 py-4 text-gray-400 flex justify-between itmes-center">
                            <span id="advanced-msg-text">
                                <img src="../../../assets/boostDM.png" alt="">   
                                <span style="margin-left:10px ;">
                                    Boost DM<sup>&#9415;</sup>
                                </span> 
                           
                            </span>
                            <span id="advanced-msg-title">Coming Soon..</span>
                    </li>
                    <li class="mb-2 text-gray-400 flex justify-between itmes-center">
                            <span id="advanced-msg-text">
                                <img src="../../../assets/BlurredDM.png" alt="">   
                               <span style="margin-left:10px ;">Blurred DM<sup>&#9415;</sup></span> 
                                
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
    font-size: 12.5px;
    font-weight:700;
    line-height: 20px;
    color:#25213e;
    }

.sidebar{
    min-height: 100%;
    width: 380px;
    padding-top:0px ;
    box-shadow: 0px 0px 24px 0px #00000008;

}
.sidebar a:hover {
    text-decoration: underline;
}
#first-part-sidebar{
    padding: 0px;
}

#sidebar-title{
font-family: Manrope;
font-size: 16px;
font-weight: 700;
line-height: 24px;
text-align: center;
    color: #514F5F;

    padding-left: 14px;
}
#manage-inbox-title{
font-family: Manrope;
font-size: 10px;
font-weight: 700;
line-height: 18px;
letter-spacing: 1px;
text-align: left;

    color: #a7a7a5;
    
}

#advanced-msg-title{
    color: #a7a7a5;
font-family: Manrope;
font-size: 9px;
font-weight: 700;
line-height: 18px;
letter-spacing: 0px;
text-align: left;

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

#close-btn{
    border: 1px solid #F4F7F8
}

#blue-title{
    background: linear-gradient(to right, #40BEBE, #2361E6); 
    -webkit-text-fill-color: transparent; 
    background-clip: text; 
    margin-left: 13.5px;
font-family: Manrope;
font-size: 14px;
font-weight: 700;
line-height: 24px;
letter-spacing: -0.01em;
text-align: left;

}
</style>