<template>
    <div class="main-content pt-6 ml-2 mb-4 flex flex-col justify-around items-center rounded-xl ">
        <div style="width: 530px;display: flex;flex-direction: column;justify-content: center;align-items: center;">
                <div class="mb-6 flex justify-end"> 
                    <button v-if="isMobile" @click="$emit('toggle-view')" class="p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                        </svg>
        
                    </button>
        
                </div>
                <header class="flex justify-around items-center flex-col w-full mb-5">
                    <div style="width: 450px;" class="mb-6 flex justify-between items-center h-5">
                        <h1 class=" flex items-center">
                        
                            <img width="25" class="mt-2" src="../../../assets/Group 1073714856.png" alt="">
            
                            <span style="
font-family: Manrope;
font-size: 24px;
font-weight: 700;
line-height: 36px;
letter-spacing: -0.5px;
text-align: left;" id="blue-title"class="font-bold text-2xl ">
                                Get Started
                            </span> 
                        </h1>
                        <div class="flex justify-center items-center">
        
                                <img width="50"src="../../../assets/stars.png" alt=""> 
        
                            <div class="flex flex-col ml-2">
                                <span id="blue-title" class="text-sm font-bold flex justify-center items-center">
                                    You earned 20,500
                                </span>
                                <span style="font-size: 10px;line-height: 18px;font-weight: 700;letter-spacing: .2px;" class="text-gray-500">Total XP Earned: 12,000</span>
        
                            </div>
                        </div>
        
                    </div>
                    
                    <div style="width:450px;height: 15px;position: relative;" class=" bg-white rounded-full ">
                        <div id="progress-bar" class="w-1/2 rounded-full h-2"></div>
                    </div>
                </header>
                <section class="flex justify-between items-center flex-col">
                    <div>
                        <!-- <div class="  bg-gray-100 rounded-2xl flex flex-col justify-between items-start">
                            <h4 class="my-2">Inbox Name</h4>
                            <input type="text" class="bg-white py-4 px-1 shadow-sm w-full rounded-lg" placeholder="Vivatech" id="">
                            <h4 class="my-2">Inbox Color</h4>
                            <div class="flex items-center justify-between py-2">
                                <template v-for="(icon, index) in inboxIcons" :key="index">
                                    <svg @click="showTooltip($event, icon.color)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" :fill="icon.color" stroke-width="1.5" :stroke="icon.color" class="size-4 mx-3 hover:scale-150 transition-transform duration-200 ease-in-out  hover:cursor-pointer">
                                        <path fill-rule="evenodd" d="M6.912 3a3 3 0 0 0-2.868 2.118l-2.411 7.838a3 3 0 0 0-.133.882V18a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0 0 17.088 3H6.912Zm13.823 9.75-2.213-7.191A1.5 1.5 0 0 0 17.088 4.5H6.912a1.5 1.5 0 0 0-1.434 1.059L3.265 12.75H6.11a3 3 0 0 1 2.684 1.658l.256.513a1.5 1.5 0 0 0 1.342.829h3.218a1.5 1.5 0 0 0 1.342-.83l.256-.512a3 3 0 0 1 2.684-1.658h2.844Z" clip-rule="evenodd" />
                                    </svg>
        
                                </template>
                            </div>
                        </div>
                        <div class=" flex justify-between items-center">
                            <div class="flex flex-col item-center justify-start w-fit">
                                <h3 class="text-l font-semibold my-2 flex items-center">
                                    <img src="../../../assets/Subtract.png" alt="">
                                    <span id="more-inbox-title" class="mx-2">Create more inbox</span>
                                </h3>
                                <p id="more-inbox-desc" class="text-gray-500 text-sm ml-8">Create more inbox, welcome your new contact by a message</p>
                            </div>
                            <button @click="openModal" class="flex items-center bg-white text-blue-500 rounded mb-4">
                                <img src="../../../assets/Vector 2135.png" alt="">
                                <span id="points">500 XP</span> 
                            </button>
                        </div> -->
                        <img width="480px" src="../../../assets/Frame 1073715840.png" alt="">
                        
                    </div>
                    <!-- <div class="bg-white shadow rounded-xl p-6 flex items-start justify-between flex-col">
                        <div class="relative "> 
                            <img src="../../../assets/Rectangle 921719.png" alt="">
                            <img class="absolute" style="top: 50%;left: 50%;transform: translate(-50%,-50%);" src="../../../assets/Play button.png" alt="">
                        </div>
                        <div class="flex items-center justify-between mt-2">
                            <div class="">
                                <h3 class="text-l font-semibold my-2 flex items-center">
                                    
                                    <img src="../../../assets/Subtract(1).png" alt="">
                                    <span id="more-inbox-title" class="mx-2">Manage your messaging rules</span>
                                </h3>
                                <p id="more-inbox-desc" class="text-gray-500 text-sm ml-8">Create more inbox, welcome your new contact by a message</p>
                            </div>
                            <button class="flex items-center bg-white text-blue-500 rounded mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            
                            <span id="points">100 XP</span> 
                            </button>
        
                        </div>
                    </div> -->
                    <img width="480px" src="../../../assets/Frame 1073715830.png" alt="">

                </section>
                <div v-if="tooltip.visible" :style="{ top: tooltip.top, left: tooltip.left }" class="tooltip">
                    <div class="tooltip-header" :style="{ backgroundColor: tooltip.color }">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tooltip-icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
                        </svg>
                        <span class="tooltip-title">Vivatech</span>
                    </div>
                    <div class="tooltip-content">
                        <p>Hello <strong>{FirstName}</strong>,It was a</p>
                        <p> pleasure to meet you at Vivatech.</p>
                    </div>
                </div>
        
                <div v-if="isModalVisible" class="modal-overlay">
                    <div class="modal">
                        <div class="modal-content items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="modal-icon">
                                <path d="M12 0L9.56 7.09H1.26L7.14 11.48L5.36 18.41L12 14.35L18.64 18.41L16.86 11.48L22.74 7.09H14.44L12 0Z" />
                            </svg>
                            <h2>Congratulations You've Earned</h2>
                            <p class="xp-amount mt-4">500 XP</p>
                            <button @click="closeModal" class="modal-button w-full mt-6">Yeahhhhhhhhhhh!</button>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</template>

<script>
export default {
    name: 'MainContent',
    data() {
        return {
            inboxIcons: [
                { color: '#DB4CF4' },
                { color: '#8057EC' },
                { color: '#2864ED' },
                { color: '#10BBE0' },
                { color: '#EF3A00' },
                { color: '#EFBB00' },
                { color: '#93ADB2' }
            ],
            tooltip: {
                visible: false,
                color: '',
                top: '0px',
                left: '0px'
            },
            isModalVisible: false
        };
    },
    methods: {
    showTooltip(event, color) {
        this.tooltip.color = color;
        
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

        const tooltipHeight = 175; 
        const tooltipWidth = 50; 
        this.tooltip.top = `${event.clientY + scrollTop - tooltipHeight}px`;
        this.tooltip.left = `${event.clientX + scrollLeft - tooltipWidth}px`;
        this.tooltip.visible = true;

        // Hide the tooltip after 3 seconds
        setTimeout(() => {
            this.tooltip.visible = false;
        }, 3000);
    },
    openModal() {
        this.isModalVisible = true;
    },
    closeModal() {
        this.isModalVisible = false;
    }
},

    props: ['isMobile']


};
</script>

<style scoped>


.main-content {
     /* background: linear-gradient(to top, rgba(232,234,249,1), #f8f9fa);   */
     box-shadow: 0px 0px 16px 14px#00000008;
         background: transparent

}

.tooltip {
    position: absolute;
    background-color: white;
    color: black;
    padding: 20px;
    border-radius: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    white-space: nowrap;
    width: 350px;
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex-direction: column;
}

.tooltip-header {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0px;
    border-radius: 20px;
    color: white;
    width: 120px;
    height: 36px;
}

.tooltip-icon {
    width: 24px;
    height: 24px;
    margin-right: 10px;
}

.tooltip-title {
    font-weight: bold;
    font-size: 1rem;
}

.tooltip-content {
    padding: 10px;
    color: #727272;
    
}

.tooltip-content p {
    font-size: medium;
    padding: 6px;
}
.modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.modal {
    background: #bbb;
    padding: 50px;
    border-radius: 20px;
    text-align: center;
    max-width: 450px;
    width: 100%;
}

.modal-content {
    display: flex;
    flex-direction: column;

}

.modal-icon {
    width: 50px;
    height: 50px;
    margin-bottom: 20px;
    color: #007bff;
}

.modal-content h2 {
    font-size: 1.5rem;
    margin-bottom: 10px;

}

.xp-amount {
    font-size: 2rem;
    font-weight: 500;
    color: #007bff;
    margin-bottom: 20px;
}

.modal-button {
    background: linear-gradient(to left, #2975dd 0%, #39a9c7 100%);
    color: white;
    border: none;
    padding: 18px;
    border-radius: 15px;
    cursor: pointer;
    font-size: 1rem;
}

#more-inbox-title{
    color: #514F5F;
    font-size: 16px;
    font-weight: 700;
    line-height: 24px;
}

#more-inbox-desc{
    color: #8C8D90;
    font-size: 12px;
    font-weight: 500;
    line-height: 24px;
}
#points{
    font-weight: 700;
    font-size:16px;
    line-height:24px;
    text-align:Right;
    margin-left: 8px;
}

#inbox-details{
    color: #25213E;
    font-weight: 600; 
    border-radius: 20px;  

}
input{
  text-indent: 10px;
  color: #000;
  font-weight: 600;
}
#blue-title{
    background: linear-gradient(to right, #40BEBE, #2361E6); 
    -webkit-text-fill-color: transparent; 
    background-clip: text; 
}
#progress-bar{
    background: linear-gradient(to right, #40BEBE, #2361E6); 
    height: 7px;
    position: absolute;
    top: 0%;
    left: 0%;
    transform: translate(4%,50%);
}
</style>
