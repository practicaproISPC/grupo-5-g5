import { ServletContextProvider } from "./context/ServletContext";
import { HeaderV } from "./components/Header";
import { CategoriesV } from "./components/Categories";
import { FooterV } from "./components/Footer";
import './App.css';


function App() {
  return (
    <ServletContextProvider>
      <HeaderV />
      <main>
      <CategoriesV />
      </main>
      <FooterV />
    </ServletContextProvider>
  );
}

export default App;
