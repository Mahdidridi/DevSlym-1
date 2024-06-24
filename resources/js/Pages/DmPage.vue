<template>
  <div>
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
  padding: 8px;
  font-family: "Inter", sans-serif;
  line-height: 16px;
  background: linear-gradient(to left, #e8eaf9 0%, #f1f1f9 100%);
}

.desktop-view {
  display: flex;
}

.mobile-view {
  display: block;
}

.sidebar {
  flex: 1;
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
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
</style>
