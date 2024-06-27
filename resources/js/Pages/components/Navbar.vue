<template>
    <div class="nav h-20 flex justify-between items-center px-5 bg-slate-400">
        <div class="flex items-center justify-center">
         <button class="p-3 border rounded-xl bg-gray-200 h-10 w-10">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                 <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>

         </button> 

          <span>Messages</span>  
        
        </div>
        <div class="logo">
            <img class="rounded-full w-10 h-10 " src="../../../assets/Container.png" alt="Avatar">
        </div>
    </div>
</template>


<style scoped>
.nav {
    background: linear-gradient(to left, #e8eaf9 0%, #f1f1f9 100%);
}
span{
    color:#1C192B;
    padding-left: 12px;
    font-weight: 500;
    font-size: 16px;
    line-height: 21.86px;
    letter-spacing:-.16px;
}
</style>