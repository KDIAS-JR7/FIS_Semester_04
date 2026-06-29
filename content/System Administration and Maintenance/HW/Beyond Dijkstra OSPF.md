---
aliases:
  - "Beyond Dijkstra: OSPF"
---
# OSPF(Open Shortest Path First): The google maps of networking
## Prerequisites 
### What is routing?
- When beginning in  networking , it is  common to misunderstand that routers can pass packets between networks like magic just by giving it an IP address. However , this is far removed from the truth.
- While routers can in fact, transfer packets between different network segments, it's actually much like traveling to a new destination.
- For a router to communicate with a different network, it needs to know the exact **route** it has to take to reach that network. And just like when travelling to a new destination, the router needs help knowing which way to turn.
- A router populates and maintains a routing table, which contains all the routes to different networks that it has already learned - past tense. 
- In Cisco IOS, the **show ip route** command shows this routing table.
```
R1#show ip route  
Codes: L - local, C - connected, S - static, R - RIP, M - mobile, B - BGP  
      D - EIGRP, EX - EIGRP external, O - OSPF, IA - OSPF inter area    
      N1 - OSPF NSSA external type 1, N2 - OSPF NSSA external type 2  
      E1 - OSPF external type 1, E2 - OSPF external type 2  
      i - IS-IS, su - IS-IS summary, L1 - IS-IS level-1, L2 - IS-IS level-2  
      ia - IS-IS inter area, * - candidate default, U - per-user static route  
      o - ODR, P - periodic downloaded static route, H - NHRP, l - LISP  
      + - replicated route, % - next hop override  
  
Gateway of last resort is 192.168.122.1 to network 0.0.0.0  
  
S*    0.0.0.0/0 [1/0] via 192.168.122.1  
     10.0.0.0/8 is variably subnetted, 4 subnets, 4 masks  
C        10.0.0.0/24 is directly connected, FastEthernet0/0  
L        10.0.0.1/32 is directly connected, FastEthernet0/0  
O        10.0.1.0/30 [110/2] via 10.0.0.2, 1d11h, FastEthernet0/0  
O        10.2.0.0/16 [110/2] via 10.0.0.3, 1d13h, FastEthernet0/0  
     192.168.122.0/24 is variably subnetted, 2 subnets, 2 masks  
C        192.168.122.0/24 is directly connected, FastEthernet0/1  
L        192.168.122.254/32 is directly connected, FastEthernet0/1
```
### Static Routing
- As we already discussed, a routers routing table only has records of places it has already visited.
- For it to visit a new place, it need someone to point the way.  Or give it the route.
- A static route is a route that a person manually enters into a routers routing table.
- In a routing table, static routes can be identified by the letter S infront of them. 
- Ex: 
```
S*    0.0.0.0/0 [1/0] via 192.168.122.1  
```
- Static routes are simple to configure and is currently the most secure method to create a route, as the person entering the route knows exactly  which network is being introduced. 
- They are also MUCH more resource efficient than Dynamic routing.
### But why not use Static Routing?
- IF static routing is so easy and secure, why not use it? The issue lies in the one, big, glaring weakness of Static routes.
- The Chinese Philosopher **Lao Tzu** once said, “Give a man a fish and you feed him for a day. Teach him how to fish and you feed him for a lifetime.”
- Static routing follows the first principle.  It gives a man a fish. The fish feeds him for a day. But the next day, he's hungry again. But how does this relate to static routing?
- In static routing, one must manually insert a route to every network. 
- For example, let's use a small scenario.
- You are the network manager /sysadmin of ABC corp. You login to router R1 and insert the route to network X. Joe in accounting can now send a packet to network x through R1. But the next day, Joe complains to you that he also wants to reach network Y. Of course he can't. You didn't tell R1 how to reach Y.
- Just like that, in a massive network, you have to tell R1 how to reach every single network segment to keep Joe from pounding on your door the next morning.
- This is why its like giving the man a fish. If the router wants more fish, you have to give them again yourself.
- But the problem is.. the nightmare doesn't end there.
- The next day, Joe actually tries to communicate with Anna on network X. But he can't. Why? Didn't you already install the route to X on R1?
- This is because routing is uni-directional. When you added the route to X on R1, R1 learned the route. But,  the router Anna is using , R2, doesn't know how to reach R1. You have to manually tell R2 how to reach R1 as well so that Anna can reply to Joe asking her out on a dinner date.
- But then, things go south and Anna disconnects R2 from the network and leaves the company. Now Joe's router R1 has a useless route just sitting there, so he's back to banging at your door. Why? because you have to manually remove a manually entered static route.  Its the gift that keeps giving.
- On a large network this approach is very cumbersome and error prone. And since you have to tell each router how to reach each other routers directly connected network, it becomes increasingly difficult to scale the network. And when a route is no longer useful, you have to once again manually delete it from every single router's routing table.
### Dynamic Routing: Teaching routers how to fish
- Dynamic routing solves this major issue in Static routing.. By teaching the router how to fish.
- In static routing, you had to install every route manually. And after doing it for 10 routers, you are already drained. Now you wonder.. What a chore. Can't these routers just learn these routes themselves?
- Well, you are in luck. Dynamic routing does just that. Dynamic routing protocols allow routers to communicate among themselves, share routes and populate/manage their routing tables themselves. 
- Here, once you complete the initial setup process, the routers will automatically manage their routing tables, so when you set that initial route to be broadcasted on R1, R2 also learned it and vise versa. And when Anna left, R1 automatically removed that route to R2.
## OSPF(Open Shortest Path First)
- OSPF is a dynamic routing protocol built on top of Dijkstra's SPF(Shortest Path First) algorithm.
---
### OSPF terminology
#### OSPF Areas
- OSPF uses OSPF areas to section a network segment where OSPF is enabled. Each router inside the same OSPF area has the entire map of that area in their link state database. 
#### Link State Database
- The link state database or LSDB for short, contains a map of the entire network. Each router in the same OSPF area shares the same LSDB, hence have the exact same map of the network.
#### Single / Multi Area OSPF
- Single area OSPF networks have all routers inside the same OSPF area, typically area 0. This approach is suitable for smaller networks when the complexity of multi area is not worth the trouble.
- Multi area OSPF divides the network into different smaller areas, with the backbone routers populating area 0. Multi area OSPF is suitable for massive networks, where keeping every router in the same area will overload the routers' LSDB.
#### DR , BDR and DR other
- In OSPF, routers make adjacencies to share LSA(Link state advertisements) . LSAs are used to manage the OSPF neighbors and LSDB.
- But if every router sends LSAs to every router, it starts looking less like a sophisticated protocol and more like a broadcast storm - Layer 3 version.
- To prevent this, OSPF routers designate a DR(Designated Router) and a BDR(Backup DR). Every other router becomes a DR other. DR other routers only make full OSPF adjacencies with the DR and BDR. 
- And only a **full** adjacency allows passing LSAs, meaning not every router passes LSAs to every other router.
#### Administrative Distance
- This tells how much a router trusts a route. The lower the administrative distance, the better.
- For OSPF, the administrative distance is 110.
#### Cost
- The cost helps a router determine which route to pick when multiple routes exists that are learned using the same protocol. For example, three routes to the same network learned through OSPF.
- The cost can be found using ;
$$Cost = \frac{Reference\ Bandwidth}{Interface\ Bandwidth}$$
---
- With OSPF, every router has a map with the route to every network detailed within the said map, or in technical terms, the OSPF area.
### Configuring OSPF
- Configuring OSPF is **how** you teach the router to fish.
```
R3config)#router ospf 1
R3(config-router)#network 10.0.0.0 0.0.0.255 area 0
R3(config-router)#
*Mar 20 12:51:41.570: %OSPF-5-ADJCHG: Process 1, Nbr 10.1.1.0 on GigabitEthernet2/0 from LOADING to FULL, Loading Done
R3(config-router)#f==
*Mar 20 12:51:44.362: %OSPF-5-ADJCHG: Process 1, Nbr 192.168.122.254 on GigabitEthernet2/0 from LOADING to FULL, Loading Done
R3(config-router)#network 10.2.0.0 0.0.255.255 area 0
R3(config-router)#
```
- In this example, we're teaching R3 how to fish within the pond its in, which is OSPF area 0.
- You might notice **router ospf 1**. This is the OSPF process number within the router. The OSPF process number does not need to be the same for a router to learn routes with OSPF. What needs to be the same is  the area number, in this case 0.
- And look. R3 has already found some fish!
- It has already found the route to the network 10.1.1.0 without us telling it to.
- But R3 isn't just taking. It's also giving back to the community. Look close. R3 is advertising its own share of networks such as *10.2.0.0 0.0.255.255* with *network 10.0.0.0 0.0.0.255 area 0*.
- Notice the last part of the command? It says area 0. Which means, R3 is fishing in area 0 and telling the other routers in area 0 where it found a school of carps. 
- Now for the more technical readers, you might notice a rather... *wild* subnet mask.  Good eye! You just caught a *wildcard mask*. In simple terms, its the inverse of the subnet mask. OSPF uses wildcard masks when announcing networks. In this example, 0.0.0.255 is actually advertising a /24 network, which uses the subnet mask 255.255.255.0.
- A route learned through OSPF is shown in the routing table with a O. Let's take a look at that first output again.
```
R1#show ip route  
Codes: L - local, C - connected, S - static, R - RIP, M - mobile, B - BGP  
      D - EIGRP, EX - EIGRP external, O - OSPF, IA - OSPF inter area    
      N1 - OSPF NSSA external type 1, N2 - OSPF NSSA external type 2  
      E1 - OSPF external type 1, E2 - OSPF external type 2  
      i - IS-IS, su - IS-IS summary, L1 - IS-IS level-1, L2 - IS-IS level-2  
      ia - IS-IS inter area, * - candidate default, U - per-user static route  
      o - ODR, P - periodic downloaded static route, H - NHRP, l - LISP  
      + - replicated route, % - next hop override  
  
Gateway of last resort is 192.168.122.1 to network 0.0.0.0  
  
S*    0.0.0.0/0 [1/0] via 192.168.122.1  
     10.0.0.0/8 is variably subnetted, 4 subnets, 4 masks  
C        10.0.0.0/24 is directly connected, FastEthernet0/0  
L        10.0.0.1/32 is directly connected, FastEthernet0/0  
O        10.0.1.0/30 [110/2] via 10.0.0.2, 1d11h, FastEthernet0/0  
O        10.2.0.0/16 [110/2] via 10.0.0.3, 1d13h, FastEthernet0/0  
     192.168.122.0/24 is variably subnetted, 2 subnets, 2 masks  
C        192.168.122.0/24 is directly connected, FastEthernet0/1  
L        192.168.122.254/32 is directly connected, FastEthernet0/1
```
- Notice the Os? Here, R1 has learned multiple routes through OSPF.
- Ex: O        10.0.1.0/30 [110/2] via 10.0.0.2, 1d11h, FastEthernet0/0  
- The keen eyed of you might have noticed the **110/2** in the output . What do these numbers mean? These are the administrative distance and cost values. As we have discussed earlier, OSPF has an administrative distance of 110. And since this route was learned through OSPF, the administrative distance matches that of OSPF. The number 2 is the cost of the route.
# Summary
- In summary, in this article, we discussed what routing is and why we need it.
- We discussed what static routing is and why we don't use it on complex networks.
- Then we got a general idea on what dynamic routing is.
- Finally we took a top level crash-course on OSPF.
- Hope you had a fun time reading this article as much as I did writing it, and that I was able to show you glimpse into the circuit boards that let you play competitive shooter games over the internet. With that, have fun learning and have a nice day.