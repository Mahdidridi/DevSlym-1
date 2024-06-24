<template>
    <div class="main-content shadow-md flex-1 p-8 ml-4 flex flex-col justify-around items-center rounded-xl ">
        <div class="mb-6 flex justify-end"> 
            <button v-if="isMobile" @click="$emit('toggle-view')" class="border rounded-full shadow-md p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
</svg>

            </button>

        </div>
        <header class="mb-6 flex justify-around items-center flex-col w-1/2">
            <div class="mb-6 flex items-center justify-between w-full">
                <h1 class="text-2xl font-bold text-blue-500 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                    </svg>
    
                    <span>Get Started</span> 
                </h1>
                <div class="flex flex-col">
                    <span class="text-sm font-bold text-blue-500">You earned 20,500 XP</span>
                    <span class="text-xs text-gray-500">Total XP Earned: 12,000</span>
                </div>

            </div>
            
            <div class="w-full bg-white rounded-full h-4">
                <div class="bg-blue-500 h-4 w-1/2 rounded-full"></div>
            </div>
        </header>
        <section class="mb-8 p-10">
            <div class="bg-white shadow rounded-xl p-6 mb-6 flex items-start justify-between flex-col">
                <div class="bg-gray-100 p-5 w-fit rounded-2xl flex flex-col justify-between items-start">
                    <h2 class="my-2">Inbox name</h2>
                    <input type="text" class="bg-white py-5 px-1 h-3 shadow-sm w-full" placeholder="Vivatech" id="">
                    <h2 class="my-2">Inbox color</h2>
                    <div class="flex items-center justify-between py-4">
                        <template v-for="(icon, index) in inboxIcons" :key="index">
                            <svg @click="showTooltip($event, icon.color)" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" :stroke="icon.color" class="size-5 mx-3 hover:scale-150 transition-transform duration-200 ease-in-out  hover:cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
                            </svg>
                        </template>
                    </div>
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div class="flex flex-col item-center justify-start w-fit">
                        <h3 class="text-l font-semibold my-2 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-blue-500">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span class="mx-2 text-sm">Create more inbox</span>
                        </h3>
                        <p class="text-gray-500 text-sm ml-8">Create more inbox, welcome your new contact by a message</p>
                    </div>
                    <button @click="openModal" class="flex items-center bg-white text-blue-500 rounded mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        500 XP
                    </button>
                </div>
            </div>
            <div class="bg-white shadow rounded-xl p-6 flex items-center justify-between">
                <div>
                    <h3 class="text-l font-semibold my-2 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-blue-500">
                                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                            </svg>
                            <span class="mx-2 text-sm">Manage your messaging rules</span>
                    </h3>
                    <p class="text-gray-500 text-sm ml-8">Create more inbox, welcome your new contact by a message</p>
                </div>
                <button class="flex items-center bg-white text-blue-500 rounded mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
</svg>

                    100 XP
                </button>
            </div>
        </section>
        <div v-if="tooltip.visible" :style="{ top: tooltip.top, left: tooltip.left }" class="tooltip">
            <div class="tooltip-header" :style="{ backgroundColor: tooltip.color }">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tooltip-icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 0 1 2.012 1.244l.256.512a2.25 2.25 0 0 0 2.013 1.244h3.218a2.25 2.25 0 0 0 2.013-1.244l.256-.512a2.25 2.25 0 0 1 2.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 0 0-2.15-1.588H6.911a2.25 2.25 0 0 0-2.15 1.588L2.35 13.177a2.25 2.25 0 0 0-.1.661Z" />
                </svg>
                <span class="tooltip-title">Vivatech</span>
            </div>
            <div class="tooltip-content">
                <p>Hello <strong>{FirstName}</strong>,</p>
                <p>It was a pleasure to meet you at Vivatech.</p>
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
</template>

<script>
export default {
    name: 'MainContent',
    data() {
        return {
            inboxIcons: [
                { color: 'red' },
                { color: 'blue' },
                { color: 'gray' },
                { color: 'purple' },
                { color: 'green' },
                { color: 'orange' },
                { color: 'yellow' }
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
    background-color: #f8f9fa;
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
    padding: 5px;
    border-radius: 20px;
    color: white;
    width: 33%;
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
</style>
