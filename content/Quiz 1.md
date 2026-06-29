---
sources:
  - "[[Lesson 2 - OS architectures]]"
---
> [!question] Explain the difference between a microkernel and a monolithic kernel, including their advantages and disadvantages.
>> [!success]- Answer
>> A microkernel is a design where user services and kernel services are placed in separate address spaces. This approach keeps the kernel small, reduces the chance of system-wide failures, and makes the operating system more secure and easier to maintain. However, it can be slower due to message passing between layers. A monolithic kernel, on the other hand, places all operating system components—both user services and kernel-level services—into the same address space, running entirely in kernel mode. This design improves performance but increases complexity and makes maintenance more challenging.

> [!question] User Mode is a restricted environment where application programs run.
>> [!success]- Answer
>> True

> [!question] Which of the following are advantages of a microkernel design?
> a) Easy to extend
> b) Easier to debug
> c) Faster execution speed
> d) Smaller in size
>> [!success]- Answer
>> a) Easy to extend
>> b) Easier to debug
>> d) Smaller in size

> [!question] What is a key benefit of using a layered structure for an operating system?
>> [!success]- Answer
>> Easier debugging because errors can be isolated to specific layers.

> [!question] A monolithic kernel design places all operating system components—both user services and kernel-level services—into the same address space, running entirely in ______________ mode.
>> [!success]- Answer
>> kernel

> [!question] Match the following terms with their descriptions:
>> [!example] Group A
>> a) Monolithic kernel
>> b) Microkernel
>
>> [!example] Group B
>> n) User services and kernel services are placed in separate address spaces.
>> o) Placing all operating system components—both user services and kernel-level services—into the same address space, running entirely in kernel mode.
>
>> [!success]- Answer
>> a) -> n)
>> b) -> o)

> [!question] What happens when a program running in user mode makes a request that requires hardware access?
> a) The system crashes.
> b) The CPU switches to kernel mode to perform the task.
> c) The user mode program runs indefinitely.
> d) The operating system restarts.
>> [!success]- Answer
>> c) The user mode program runs indefinitely.

