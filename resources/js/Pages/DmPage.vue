<template>
  <div style="  background: url('https://slym.co/images/background.webp');
  background-repeat: no-repeat;
  background-size: cover;
  background-position:40% 60%;">
    <Navbar />
    <div :class="['app-container', isMobile ? 'mobile-view' : 'desktop-view']">
      <Sidebar 
        v-if="!isMobile || viewMode === 'sidebar'" 
        @toggle-view="toggleView" 
        :is-mobile="isMobile" 
      />
      <MainContent 
        v-if="!isMobile || viewMode === 'mainContent'" 
        @toggle-view="toggleView" 
        :is-mobile="isMobile" 
      />
    </div>
  </div>
</template>

<script>
import Navbar from './components/Navbar.vue'
import Sidebar from './components/Sidebar.vue'
import MainContent from './components/MainContent.vue'

export default {
  components: {
    Navbar,
    Sidebar,
    MainContent
  },
  data() {
    return {
      viewMode: 'sidebar', // Initially show the sidebar on mobile
      isMobile: window.innerWidth <= 768 // Determine if the initial view is mobile
    }
  },
  methods: {
    toggleView() {
      this.viewMode = this.viewMode === 'sidebar' ? 'mainContent' : 'sidebar';
    },
    handleResize() {
      this.isMobile = window.innerWidth <= 768;
      if (!this.isMobile) {
        this.viewMode = 'sidebar'; // Reset view mode when switching to desktop
      }
    }
  },
  mounted() {
    window.addEventListener('resize', this.handleResize);
  },
  beforeDestroy() {
    window.removeEventListener('resize', this.handleResize);
  }
}
</script>

<style scoped>
.app-container {
  min-height: 100vh;
  padding: 0px 10px;
  font-family: "Manrope", sans-serif;
  font-optical-sizing: auto;
  font-style: normal;
  line-height: 16px;
  
}

.desktop-view {
  display: flex;
}

.mobile-view {
  display: block;
}

.sidebar {
  flex: 1.12;
}

.main-content {
  flex: 3;
}

@media (max-width: 768px) {
  .app-container {
    flex-direction: column;
  }

  .sidebar, .main-content {
    width: 100%;
  }
}
</style>

<style>
@import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap');
</style>
