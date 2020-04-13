
import Login from './components/Login';
import Inventory from './components/Inventory';
import POS from './components/POS';

export const routes = [
      {
	      name: 'login',
	      path: '/',
	      component: Login
	  },
      {
	      name: 'inventory',
	      path: '/inventory',
	      component: Inventory
	  },
	  {
	      name: 'pos',
	      path: '/pos',
	      component: POS
	  }
];
